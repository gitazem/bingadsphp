<?php

// This example demonstrates how to download the comma separated value (CSV) file that contains geographical location information 
// that can be used with Bing Ads location targeting.

// Include the BingAds namespaced class files available
// for download at http://go.microsoft.com/fwlink/?LinkId=322147
include 'bingads\v10\CampaignManagementClasses.php';
include 'bingads\ClientProxy.php';

// Specify the BingAds\v10\CampaignManagement objects that will be used.
use BingAds\v10\CampaignManagement\GetGeoLocationsFileUrlRequest;

// Specify the BingAds\Proxy objects that will be used.
use BingAds\Proxy\ClientProxy;

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

// Specify your credentials.

$GLOBALS['UserName'] = "UserNameGoesHere";
$GLOBALS['Password'] = "PasswordGoesHere";
$GLOBALS['DeveloperToken'] = "DeveloperTokenGoesHere";
$GLOBALS['AccountId'] = null; //AccountIdGoesHere;

$GLOBALS['Proxy'] = null;

$GLOBALS['CampaignWsdl'] = "https://campaign.api.sandbox.bingads.microsoft.com/Api/Advertiser/CampaignManagement/v10/CampaignManagementService.svc?singleWsdl";
$GLOBALS['CampaignProxy'] = null; 

// The full path where you want to download the geographical locations file.

$GLOBALS['LocalFile'] = "c:\\geolocations\\geolocations.csv";

// The temporary location of the downloaded locations file.

$GLOBALS['TempFile'] = "c:\\geolocations\\temp.csv";

// The only supported file format version is 1.0. 

$Version = "1.0";

// The language and locale of the geographical locations file available for download.
// This example uses 'en' (English). Supported locales are 'zh-Hant' (Traditional Chinese), 'en' (English), 'fr' (French), 
// 'de' (German), 'it' (Italian), 'pt-BR' (Portuguese - Brazil), and 'es' (Spanish). 

$LanguageLocale = "en";

try
{
    //  This example uses the UserName and Password elements for authentication. 
    $GLOBALS['CampaignProxy'] = ClientProxy::ConstructWithAccountId(
        $GLOBALS['CampaignWsdl'], 
        $GLOBALS['UserName'], 
        $GLOBALS['Password'], 
        $GLOBALS['DeveloperToken'], 
        $GLOBALS['AccountId'], 
        null);
    
    // For Managing User Authentication with OAuth, replace the UserName and Password elements with the AuthenticationToken, which is your OAuth access token.
    /*$GLOBALS['CampaignProxy'] = ClientProxy::ConstructWithAccountId(
        $GLOBALS['CampaignWsdl'], 
        null, 
        null, 
        $GLOBALS['DeveloperToken'], 
        $GLOBALS['AccountId'], 
        "AuthenticationTokenGoesHere");
    */
    
    date_default_timezone_set('UTC');

    // Going forward you should track the date and time of the previous download,  
    // and compare it with the last modified time provided by the service.
    $previousSyncTimeUtc = new DateTime('2016-11-29T00:00:00-00:00');
    
    $getGeoLocationsFileUrlResponse = GetGeoLocationsFileUrl(
        $Version, 
        $LanguageLocale);

    $fileUrl = $getGeoLocationsFileUrlResponse->FileUrl;
    $fileUrlExpiryTimeUtc = $getGeoLocationsFileUrlResponse->FileUrlExpiryTimeUtc;
    $lastModifiedTimeUtc = $getGeoLocationsFileUrlResponse->LastModifiedTimeUtc;

    printf("FileUrl: %s\n", $fileUrl);
    printf("FileUrlExpiryTimeUtc: %s\n", $fileUrlExpiryTimeUtc);
    printf("LastModifiedTimeUtc: %s\n", $lastModifiedTimeUtc);
    
    // Download the file if it was modified since the previous download.
    if($previousSyncTimeUtc < $lastModifiedTimeUtc)
    {
        DownloadFile($fileUrl);
    }
}
catch (SoapFault $e)
{
    // Output the last request/response.
	
    print "\nLast SOAP request/response:\n";
    print $GLOBALS['Proxy']->GetWsdl() . "\n";
    print $GLOBALS['Proxy']->GetService()->__getLastRequest()."\n";
    print $GLOBALS['Proxy']->GetService()->__getLastResponse()."\n";
	
    // Campaign Management service operations can throw AdApiFaultDetail.
    if (isset($e->detail->AdApiFaultDetail))
    {
        // Log this fault.

        print "The operation failed with the following faults:\n";

        $errors = is_array($e->detail->AdApiFaultDetail->Errors->AdApiError)
        ? $e->detail->AdApiFaultDetail->Errors->AdApiError
        : array('AdApiError' => $e->detail->AdApiFaultDetail->Errors->AdApiError);

        // If the AdApiError array is not null, the following are examples of error codes that may be found.
        foreach ($errors as $error)
        {
            print "AdApiError\n";
            printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

            switch ($error->Code)
            {
                case 105:  // InvalidCredentials
                    break;
                case 117:  // CallRateExceeded
                    break;
                default:
                    print "Please see MSDN documentation for more details about the error code output above.\n";
                    break;
            }
        }
    }
}
catch (Exception $e)
{
    if ($e->getPrevious())
    {
        ; // Ignore fault exceptions that we already caught.
    }
    else
    {
        print $e->getCode()." ".$e->getMessage()."\n\n";
        print $e->getTraceAsString()."\n\n";
    }
}

// Gets the file URL that you can use to download geographical location targeting codes.

function GetGeoLocationsFileUrl(
    $version, 
    $languageLocale)
{
    $GLOBALS['Proxy'] = $GLOBALS['CampaignProxy'];

    $request = new GetGeoLocationsFileUrlRequest();
    $request->Version = $version;
    $request->LanguageLocale = $languageLocale;
    
    return $GLOBALS['Proxy']->GetService()->GetGeoLocationsFileUrl($request);
}

function DownloadFile($fileUrl){
    $ch = curl_init($fileUrl);
    $fileHandle = fopen($GLOBALS['TempFile'], 'w+');

    curl_setopt($ch, CURLOPT_FILETIME, true); 
    curl_setopt($ch, CURLOPT_ENCODING, "gzip");
    curl_setopt($ch, CURLOPT_FILE, $fileHandle); 
    
    curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch); 

    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);     
 
    curl_close($ch);
    fclose($fileHandle);
    
    if ($httpCode == 200)
    {
        printf("Downloaded the geographical locations to %s.\n", $GLOBALS['LocalFile']);
        rename($GLOBALS['TempFile'], $GLOBALS['LocalFile']);
    }
    else
    {
        printf("The locations file was not successfully download.\n");
        unlink($GLOBALS['TempFile']);
    }
}

?>

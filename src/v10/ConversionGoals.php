<?php

// Include the BingAds\v10 namespaced class file available
// for download at http://go.microsoft.com/fwlink/?LinkId=322147
include 'bingads\v10\CampaignManagementClasses.php';
include 'bingads\ClientProxy.php'; 

// Specify the BingAds\v10\CampaignManagement objects that will be used.
use BingAds\v10\CampaignManagement\AddConversionGoalsRequest;
use BingAds\v10\CampaignManagement\GetConversionGoalsByIdsRequest;
use BingAds\v10\CampaignManagement\UpdateConversionGoalsRequest;
use BingAds\v10\CampaignManagement\AddUetTagsRequest;
use BingAds\v10\CampaignManagement\GetUetTagsByIdsRequest;
use BingAds\v10\CampaignManagement\UpdateUetTagsRequest;
use BingAds\v10\CampaignManagement\ConversionGoal;
use BingAds\v10\CampaignManagement\AppInstallGoal;
use BingAds\v10\CampaignManagement\DurationGoal;
use BingAds\v10\CampaignManagement\EventGoal;
use BingAds\v10\CampaignManagement\PagesViewedPerVisitGoal;
use BingAds\v10\CampaignManagement\UrlGoal;
use BingAds\v10\CampaignManagement\ExpressionOperator;
use BingAds\v10\CampaignManagement\ValueOperator;
use BingAds\v10\CampaignManagement\UetTag;
use BingAds\v10\CampaignManagement\ConversionGoalRevenue;
use BingAds\v10\CampaignManagement\ConversionGoalType;
use BingAds\v10\CampaignManagement\ConversionGoalRevenueType;
use BingAds\v10\CampaignManagement\ConversionGoalCountType;
use BingAds\v10\CampaignManagement\ConversionGoalStatus;
use BingAds\v10\CampaignManagement\EntityScope;

// Specify the BingAds\Proxy objects that will be used.
use BingAds\Proxy\ClientProxy;

// Disable WSDL caching.

ini_set("soap.wsdl_cache_enabled", "0");
ini_set("soap.wsdl_cache_ttl", "0");

// Specify your credentials.
// If you are using OAuth, then you must include the AuthenticationToken header element
// instead of UserName and Password.

$UserName = "<UserNameGoesHere>";
$Password = "<PasswordGoesHere>";
$DeveloperToken = "<DeveloperTokenGoesHere>";
$CustomerId = <CustomerIdGoesHere>;
$AccountId = <AccountIdGoesHere>;

$wsdl = "https://campaign.api.bingads.microsoft.com/Api/Advertiser/CampaignManagement/V10/CampaignManagementService.svc?singleWsdl";

// IMPORTANT: This example requires that you are enabled for Upgraded URLs.
try
{
    //  This example uses the UserName and Password elements for authentication. 
    $proxy = ClientProxy::ConstructWithAccountAndCustomerId($wsdl, $UserName, $Password, $DeveloperToken, $AccountId, $CustomerId, null);
    
    // For Managing User Authentication with OAuth, replace the UserName and Password elements with the AuthenticationToken, which is your OAuth access token.
    //$proxy = ClientProxy::ConstructWithAccountAndCustomerId($wsdl, null, null, $DeveloperToken, $AccountId, $CustomerId, "AuthenticationTokenGoesHere");
	
    // Before you can track conversions or target audiences using a remarketing list, 
    // you need to create a UET tag in Bing Ads (web application or API) and then 
    // add the UET tag tracking code to every page of your website. For more information, please see 
    // Universal Event Tracking at https://msdn.microsoft.com/library/bing-ads-universal-event-tracking-guide.aspx.

    // First you should call the GetUetTagsByIds operation to check whether a tag has already been created. 
    // You can leave the TagIds element null or empty to request all UET tags available for the customer.

    $uetTags = GetUetTagsByIds($proxy, null)->UetTags;
    
    // If you do not already have a UET tag that can be used, or if you need another UET tag, 
    // call the AddUetTags service operation to create a new UET tag. If the call is successful, 
    // the tracking script that you should add to your website is included in a corresponding 
    // UetTag within the response message. 

    if ($uetTags == null || count($uetTags) < 1)
    {
        $addUetTags = array();
        $uetTag = new UetTag();
        $uetTag->Description = "My First Uet Tag";
        $uetTag->Name = "New Uet Tag";
        $addUetTags[] = $uetTag;
                
        $uetTags = AddUetTags($proxy, $addUetTags)->UetTags;
    }

    if ($uetTags == null || count($uetTags) < 1)
    {
        printf(
            "You do not have any UET tags registered for CustomerId %s.\n\n", $CustomerId
        );
        return;
    }

    print("List of all UET Tags:\n\n");
    foreach ($uetTags->UetTag as $uetTag)
    {
        OutputUetTag($uetTag);
    }

    // After you retreive the tracking script from the AddUetTags or GetUetTagsByIds operation, 
    // the next step is to add the UET tag tracking code to your website. We recommend that you, 
    // or your website administrator, add it to your entire website in either the head or body sections. 
    // If your website has a master page, then that is the best place to add it because you add it once 
    // and it is included on all pages. For more information, please see 
    // Universal Event Tracking at https://msdn.microsoft.com/library/bing-ads-universal-event-tracking-guide.aspx.


    // We will use the same UET tag for the remainder of this example.

    $tagId = $uetTags->UetTag[0]->Id;

    // Optionally you can update the name and description of a UetTag with the UpdateUetTags operation.

    print("UET Tag BEFORE update:\n\n");
    OutputUetTag($uetTags->UetTag[0]);

    $uetTags = array();
    $updateUetTag = new UetTag();
    $updateUetTag->Description = "Updated Uet Tag Description";
    $updateUetTag->Id = $tagId;
    $updateUetTag->Name = "Updated Uet Tag Name " . $_SERVER['REQUEST_TIME'];
    $uetTags[] = $updateUetTag;
    
    UpdateUetTags($proxy, $uetTags);

    $tagIds = array();
    $tagIds[] = $tagId;
    $uetTags = GetUetTagsByIds($proxy, $tagIds)->UetTags;

    print("UET Tag AFTER update:\n\n");
    OutputUetTag($uetTags->UetTag[0]);
    
    // Add conversion goals that depend on the UET Tag Id retreived above.
    // Please note that you cannot delete conversion goals. If you want to stop 
    // tracking conversions for the goal, you can set the goal status to Paused.

    $addConversionGoals = array();
    
    $addDurationGoal = new DurationGoal();
    $addDurationGoal->ConversionWindowInMinutes = 30;
    $addDurationGoal->CountType = ConversionGoalCountType::All;
    $addDurationGoal->MinimumDurationInSeconds = 60;
    $addDurationGoal->Name = "My Duration Goal " . $_SERVER['REQUEST_TIME'];
    $addDurationGoalRevenue = new ConversionGoalRevenue();
    $addDurationGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $addDurationGoalRevenue->Value = 5.00;
    $addDurationGoalRevenue->CurrencyCode = null;
    $addDurationGoal->Revenue = $addDurationGoalRevenue;
    $addDurationGoal->Scope = EntityScope::Account;
    $addDurationGoal->Status = ConversionGoalStatus::Active;
    $addDurationGoal->TagId = $tagId;
    $encodedDurationGoal = new SoapVar($addDurationGoal, SOAP_ENC_OBJECT, 'DurationGoal', $proxy->GetNamespace());
    $addConversionGoals[] = $encodedDurationGoal;
    
    
    $addEventGoal = new EventGoal();
    // The type of user interaction you want to track.
    $addEventGoal->ActionExpression = "play";
    $addEventGoal->ActionOperator = ExpressionOperator::Contains;
    // The category of event you want to track. 
    $addEventGoal->CategoryExpression = "video";
    $addEventGoal->CategoryOperator = ExpressionOperator::Contains;
    $addEventGoal->ConversionWindowInMinutes = 30;
    $addEventGoal->CountType = ConversionGoalCountType::All;
    // The name of the element that caused the action.
    $addEventGoal->LabelExpression = "trailer";
    $addEventGoal->LabelOperator = ExpressionOperator::Contains;
    $addEventGoal->Name = "My Event Goal " . $_SERVER['REQUEST_TIME'];
    $addEventGoalRevenue = new ConversionGoalRevenue();
    $addEventGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $addEventGoalRevenue->Value = 5.00;
    $addEventGoalRevenue->CurrencyCode = null;
    $addEventGoal->Revenue = $addEventGoalRevenue;
    $addEventGoal->Scope = EntityScope::Account;
    $addEventGoal->Status = ConversionGoalStatus::Active;
    $addEventGoal->TagId = $tagId;
    // A numerical value associated with that event. 
    // Could be length of the video played etc.
    $addEventGoal->Value = 5.00;
    $addEventGoal->ValueOperator = ValueOperator::Equals;
    $encodedEventGoal = new SoapVar($addEventGoal, SOAP_ENC_OBJECT, 'EventGoal', $proxy->GetNamespace());
    $addConversionGoals[] = $encodedEventGoal;
        
    $addPagesViewedPerVisitGoal = new PagesViewedPerVisitGoal();
    $addPagesViewedPerVisitGoal->ConversionWindowInMinutes = 30;
    $addPagesViewedPerVisitGoal->CountType = ConversionGoalCountType::All;
    $addPagesViewedPerVisitGoal->MinimumPagesViewed = 5;
    $addPagesViewedPerVisitGoal->Name = "My Pages Viewed Per Visit Goal " . $_SERVER['REQUEST_TIME'];
    $addPagesViewedPerVisitGoalRevenue = new ConversionGoalRevenue();
    $addPagesViewedPerVisitGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $addPagesViewedPerVisitGoalRevenue->Value = 5.00;
    $addPagesViewedPerVisitGoalRevenue->CurrencyCode = null;
    $addPagesViewedPerVisitGoal->Revenue = $addPagesViewedPerVisitGoalRevenue;
    $addPagesViewedPerVisitGoal->Scope = EntityScope::Account;
    $addPagesViewedPerVisitGoal->Status = ConversionGoalStatus::Active;
    $addPagesViewedPerVisitGoal->TagId = $tagId;
    $encodedPagesViewedPerVisitGoal = new SoapVar($addPagesViewedPerVisitGoal, SOAP_ENC_OBJECT, 'PagesViewedPerVisitGoal', $proxy->GetNamespace());
    $addConversionGoals[] = $encodedPagesViewedPerVisitGoal;
    
    $addUrlGoal = new UrlGoal();
    $addUrlGoal->ConversionWindowInMinutes = 30;
    $addUrlGoal->CountType = ConversionGoalCountType::All;
    $addUrlGoal->Name = "My Url Goal " . $_SERVER['REQUEST_TIME'];
    $addUrlGoalRevenue = new ConversionGoalRevenue();
    $addUrlGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $addUrlGoalRevenue->Value = 5.00;
    $addUrlGoalRevenue->CurrencyCode = null;
    $addUrlGoal->Revenue = $addUrlGoalRevenue;
    $addUrlGoal->Scope = EntityScope::Account;
    $addUrlGoal->Status = ConversionGoalStatus::Active;
    $addUrlGoal->UrlExpression = "contoso";
    $addUrlGoal->UrlOperator = ExpressionOperator::Contains;
    $addUrlGoal->TagId = $tagId;
    $encodedUrlGoal = new SoapVar($addUrlGoal, SOAP_ENC_OBJECT, 'UrlGoal', $proxy->GetNamespace());
    $addConversionGoals[] = $encodedUrlGoal;
    
    $addAppInstallGoal = new AppInstallGoal();
    // You must provide a valid app platform and app store identifier, 
    // otherwise this goal will not be added successfully. 
    $addAppInstallGoal->AppPlatform = "Windows";
    $addAppInstallGoal->AppStoreId = "AppStoreIdGoesHere";
    $addAppInstallGoal->ConversionWindowInMinutes = 30;
    $addAppInstallGoal->CountType = ConversionGoalCountType::All;
    $addAppInstallGoal->Name = "My App Install Goal " . $_SERVER['REQUEST_TIME'];
    $addAppInstallGoalRevenue = new ConversionGoalRevenue();
    $addAppInstallGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $addAppInstallGoalRevenue->Value = 5.00;
    $addAppInstallGoalRevenue->CurrencyCode = null;
    $addAppInstallGoal->Revenue = $addAppInstallGoalRevenue;
    // Account scope is not supported for app install goals. You can
    // set scope to Customer or don't set it for the same result.
    $addAppInstallGoal->Scope = EntityScope::Customer;
    $addAppInstallGoal->Status = ConversionGoalStatus::Active;
    // The TagId is inherited from the ConversionGoal base class,
    // however, App Install goals do not use a UET tag.
    $addAppInstallGoal->TagId = null;
    $encodedAppInstallGoal = new SoapVar($addAppInstallGoal, SOAP_ENC_OBJECT, 'AppInstallGoal', $proxy->GetNamespace());
    $addConversionGoals[] = $encodedAppInstallGoal;
    
    $addConversionGoalsResponse = AddConversionGoals($proxy, $addConversionGoals);

    // Find the conversion goals that were added successfully. 

    $conversionGoalIds = array();
    foreach ($addConversionGoalsResponse->ConversionGoalIds->long as $goalId)
    {
        if (!empty($goalId))
        {
            $conversionGoalIds[] = $goalId;
        }
    }

    print("List of errors returned from AddConversionGoals (if any):\n\n");
    OutputPartialErrors($addConversionGoalsResponse->PartialErrors);

    $conversionGoalTypes = array(
        ConversionGoalType::AppInstall,
    	ConversionGoalType::Duration,
        ConversionGoalType::Event,
    	ConversionGoalType::PagesViewedPerVisit,
        ConversionGoalType::Url
    );
    
    $getConversionGoals = GetConversionGoalsByIds($proxy, $conversionGoalIds, $conversionGoalTypes)->ConversionGoals;

    print("List of conversion goals BEFORE update:\n\n");
    foreach ($getConversionGoals->ConversionGoal as $conversionGoal)
    {
        OutputConversionGoal($conversionGoal);
    }

    $updateConversionGoals = array();
    
    $updateDurationGoal = new DurationGoal();
    $updateDurationGoal->ConversionWindowInMinutes = 60;
    $updateDurationGoal->CountType = ConversionGoalCountType::Unique;
    // You can change the conversion goal type e.g. in this example an event goal
    // had been created above at index 1. Now we are using the returned identifier
    // at index 1 to update the type from EventGoal to DurationGoal.
    $updateDurationGoal->Id = $conversionGoalIds[1];
    $updateDurationGoal->MinimumDurationInSeconds = 120;
    $updateDurationGoal->Name = "My Updated Duration Goal " . $_SERVER['REQUEST_TIME'];
    $updateDurationGoalRevenue = new ConversionGoalRevenue();
    $updateDurationGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $updateDurationGoalRevenue->Value = 10.00;
    $updateDurationGoalRevenue->CurrencyCode = null;
    $updateDurationGoal->Revenue = $updateDurationGoalRevenue;
    // The Scope cannot be updated, even if you update the goal type.
    // You can either send the same value or leave Scope empty.
    $updateDurationGoal->Scope = EntityScope::Account;
    $updateDurationGoal->Status = ConversionGoalStatus::Paused;
    // You can update the tag as needed. In this example we will explicitly use the same UET tag.
    // To keep the UET tag unchanged, you can also leave this element nil or empty.
    $updateDurationGoal->TagId = $tagId;
    $encodedDurationGoal = new SoapVar($updateDurationGoal, SOAP_ENC_OBJECT, 'DurationGoal', $proxy->GetNamespace());
    $updateConversionGoals[] = $encodedDurationGoal;
    
    $updateEventGoal = new EventGoal();
    // For both add and update conversion goal operations, you must include one or more  
    // of the following event operator pairs: 
    // (ActionOperator and ActionExpression), (CategoryOperator and CategoryExpression), 
    // (LabelOperator and LabelExpression), (ValueOperator and Value).
    // Each event pair (e.g. ActionOperator and ActionExpression) is optional if you include 
    // one or more of the other events.

    // For example if you do not include ActionOperator and ActionExpression during update, 
    // any existing ActionOperator and ActionExpression settings will be deleted.
    $updateEventGoal->ActionExpression = null;
    $updateEventGoal->ActionOperator = null;
    $updateEventGoal->CategoryExpression = "video";
    $updateEventGoal->CategoryOperator = ExpressionOperator::Equals;
    $updateEventGoal->Id = $conversionGoalIds[0];
    $updateEventGoal->ConversionWindowInMinutes = 30;
    $updateEventGoal->CountType = ConversionGoalCountType::All;
    // You cannot update the expression unless you also include the expression.
    // Likewise, you cannot update the operator unless you also include the expression.
    // The following attempt to update LabelOperator will result in an error.
    $updateEventGoal->LabelExpression = null;
    $updateEventGoal->LabelOperator = ExpressionOperator::Equals;
    $updateEventGoal->Name = "My Updated Event Goal " . $_SERVER['REQUEST_TIME'];
    $updateEventGoalRevenue = new ConversionGoalRevenue();
    $updateEventGoalRevenue->Type = ConversionGoalRevenueType::FixedValue;
    $updateEventGoalRevenue->Value = 5.00;
    $updateEventGoalRevenue->CurrencyCode = null;
    $updateEventGoal->Revenue = $updateEventGoalRevenue;
    // You must specify the previous settings for Value and ValueOperator,
    // unless you want them deleted during the update conversion goal operation.
    $updateEventGoal->Value = 5.00;
    $updateEventGoal->ValueOperator = ValueOperator::Equals;
    $encodedEventGoal = new SoapVar($updateEventGoal, SOAP_ENC_OBJECT, 'EventGoal', $proxy->GetNamespace());
    $updateConversionGoals[] = $encodedEventGoal;
    
    $updatePagesViewedPerVisitGoal = new PagesViewedPerVisitGoal();
    $updatePagesViewedPerVisitGoal->Id = $conversionGoalIds[2];
    $updatePagesViewedPerVisitGoal->Name = "My Updated Pages Viewed Per Visit Goal " . $_SERVER['REQUEST_TIME'];
    // When updating a conversion goal, if the Revenue element is nil or empty then none 
    // of the nested properties will be updated. However, if this element is not nil or empty 
    // then you are effectively replacing any existing revenue properties. For example to delete 
    // any previous revenue settings, set the Revenue element to an empty ConversionGoalRevenue object.
    $updatePagesViewedPerVisitGoalRevenue = new ConversionGoalRevenue();
    $updatePagesViewedPerVisitGoal->Revenue = $updatePagesViewedPerVisitGoalRevenue;
    $encodedPagesViewedPerVisitGoal = new SoapVar($updatePagesViewedPerVisitGoal, SOAP_ENC_OBJECT, 'PagesViewedPerVisitGoal', $proxy->GetNamespace());
    $updateConversionGoals[] = $encodedPagesViewedPerVisitGoal;
    
    $updateUrlGoal = new UrlGoal();
    $updateUrlGoal->Id = $conversionGoalIds[3];
    $updateUrlGoal->Name = "My Url Goal " . $_SERVER['REQUEST_TIME'];
    // If not specified during update, the previous Url settings are retained.
    $updateUrlGoal->UrlExpression = null;
    $updateUrlGoal->UrlOperator = ExpressionOperator::BeginsWith;
    $encodedUrlGoal = new SoapVar($updateUrlGoal, SOAP_ENC_OBJECT, 'UrlGoal', $proxy->GetNamespace());
    $updateConversionGoals[] = $encodedUrlGoal;
    

    $updateConversionGoalsResponse = UpdateConversionGoals($proxy, $updateConversionGoals);
    
    print("List of errors returned from AddConversionGoals (if any):\n\n");
    OutputPartialErrors($updateConversionGoalsResponse->PartialErrors);

    $getConversionGoals = GetConversionGoalsByIds($proxy, $conversionGoalIds, $conversionGoalTypes)->ConversionGoals;

    print("List of conversion goals AFTER update:\n\n");
    foreach ($getConversionGoals->ConversionGoal as $conversionGoal)
    {
        OutputConversionGoal($conversionGoal);
    }

    print("Program execution completed\n"); 

}
catch (SoapFault $e)
{
    // Output the last request/response.
	
    print "\nLast SOAP request/response:\n";
    print $proxy->GetWsdl() . "\n";
    print $proxy->GetService()->__getLastRequest()."\n";
    print $proxy->GetService()->__getLastResponse()."\n";
	
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
                    print "Please see MSDN documentation for more details about the error code Output above.\n";
                    break;
            }
        }
    }

    // Campaign Management service operations can throw ApiFaultDetail.
    elseif (isset($e->detail->EditorialApiFaultDetail))
    {
        // Log this fault.

        print "The operation failed with the following faults:\n";

        // If the BatchError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->BatchErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->BatchErrors->BatchError)
            ? $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError
            : array('BatchError' => $e->detail->EditorialApiFaultDetail->BatchErrors->BatchError);

            foreach ($errors as $error)
            {
                printf("BatchError at Index: %d\n", $error->Index);
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                switch ($error->Code)
                {
                    default:
                        print "Please see MSDN documentation for more details about the error code Output above.\n";
                        break;
                }
            }
        }

        // If the EditorialError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->EditorialErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError)
            ? $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError
            : array('BatchError' => $e->detail->EditorialApiFaultDetail->EditorialErrors->EditorialError);

            foreach ($errors as $error)
            {
                printf("EditorialError at Index: %d\n", $error->Index);
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);
                printf("Appealable: %s\nDisapproved Text: %s\nCountry: %s\n", $error->Appealable, $error->DisapprovedText, $error->PublisherCountry);

                switch ($error->Code)
                {
                    default:
                        print "Please see MSDN documentation for more details about the error code Output above.\n";
                        break;
                }
            }
        }

        // If the OperationError array is not null, the following are examples of error codes that may be found.
        if (!empty($e->detail->EditorialApiFaultDetail->OperationErrors))
        {
            $errors = is_array($e->detail->EditorialApiFaultDetail->OperationErrors->OperationError)
            ? $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError
            : array('OperationError' => $e->detail->EditorialApiFaultDetail->OperationErrors->OperationError);

            foreach ($errors as $error)
            {
                print "OperationError\n";
                printf("Code: %d\nError Code: %s\nMessage: %s\n", $error->Code, $error->ErrorCode, $error->Message);

                switch ($error->Code)
                {
                    case 106:   // UserIsNotAuthorized
                        break;
                    case 1102:  // CampaignServiceInvalidAccountId
                        break;
                    default:
                        print "Please see MSDN documentation for more details about the error code Output above.\n";
                        break;
                }
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

function OutputUetTag($uetTag)
{
    if (!empty($uetTag))
    {
        printf("Description: %s\n", $uetTag->Description);
        printf("Id: %s\n", $uetTag->Id);
        printf("Name: %s\n", $uetTag->Name);
        printf("TrackingNoScript: %s\n", $uetTag->TrackingNoScript);
        printf("TrackingScript: %s\n", $uetTag->TrackingScript);
        printf("TrackingStatus: %s\n\n", $uetTag->TrackingStatus);
    }
}

function OutputConversionGoal($conversionGoal)
{
    if (!empty($conversionGoal))
    {
        printf("ConversionWindowInMinutes: %s\n", $conversionGoal->ConversionWindowInMinutes);
        printf("CountType: %s\n", $conversionGoal->CountType);
        printf("Id: %s\n", $conversionGoal->Id);
        printf("Name: %s\n", $conversionGoal->Name);
        OutputConversionGoalRevenue($conversionGoal->Revenue);
        printf("Scope: %s\n", $conversionGoal->Scope);
        printf("Status: %s\n", $conversionGoal->Status);
        printf("TagId: %s\n", $conversionGoal->TagId);
        printf("TrackingStatus: %s\n", $conversionGoal->TrackingStatus);
        if(!empty($conversionGoal->Type)) {
            printf("Type: %s\n", $conversionGoal->Type);
        }

        if ($conversionGoal->Type == "AppInstall")
        {
            printf("AppPlatform: %s\n", $conversionGoal->AppPlatform);
            printf("AppStoreId: %s\n\n", $conversionGoal->AppStoreId);
        }
        else if ($conversionGoal->Type == "Duration")
        {
            printf("MinimumDurationInSeconds: %s\n\n", $conversionGoal->MinimumDurationInSeconds);
        }
        else if ($conversionGoal->Type == "Event")
        {
            printf("ActionExpression: %s\n", $conversionGoal->ActionExpression);
            printf("ActionOperator: %s\n", $conversionGoal->ActionOperator);
            printf("CategoryExpression: %s\n", $conversionGoal->CategoryExpression);
            printf("CategoryOperator: %s\n", $conversionGoal->CategoryOperator);
            printf("LabelExpression: %s\n", $conversionGoal->LabelExpression);
            printf("LabelOperator: %s\n", $conversionGoal->LabelOperator);
            printf("Value: %s\n", $conversionGoal->Value);
            printf("ValueOperator: %s\n\n", $conversionGoal->ValueOperator);
        }
        else if ($conversionGoal->Type == "PagesViewedPerVisit")
        {
            printf("MinimumPagesViewed: %s\n\n", $conversionGoal->MinimumPagesViewed);
        }
        else if ($conversionGoal->Type == "Url")
        {
            printf("UrlExpression: %s\n", $conversionGoal->UrlExpression);
            printf("UrlOperator: %s\n\n", $conversionGoal->UrlOperator);
        }
    }
}

function OutputConversionGoalRevenue($conversionGoalRevenue)
{
    if (!empty($conversionGoalRevenue))
    {
        printf("CurrencyCode: %s\n", $conversionGoalRevenue->CurrencyCode);
        printf("Type: %s\n", $conversionGoalRevenue->Type);
        printf("Value: %s\n", $conversionGoalRevenue->Value);
    }
}

function OutputPartialErrors($partialErrors)
{
    if(!isset($partialErrors->BatchError))
    {
        print("No partial errors\n\n");
        return;
    }
    
    foreach ($partialErrors->BatchError as $error)
    {
        printf("Index: %d\n", $error->Index);
        printf("Code: %d\n", $error->Code);
        printf("ErrorCode: %s\n", $error->ErrorCode);
        printf("Message: %s\n", $error->Message);

        // In the case of an EditorialError, more details are available

        if ($error->Type == "EditorialError" && $error->ErrorCode == "CampaignServiceEditorialValidationError")
        {
            printf("DisapprovedText: %s\n", $error->DisapprovedText);
            printf("Location: %s\n", $error->Location);
            printf("PublisherCountry: %s\n", $error->PublisherCountry);
            printf("ReasonCode: %d\n", $error->ReasonCode);
        }
    }

    print "\n";
}

// Adds one or more conversion goals to the specified account.

function AddConversionGoals($proxy, $conversionGoals)
{
    $request = new AddConversionGoalsRequest();
    $request->ConversionGoals = $conversionGoals;
    
    return $proxy->GetService()->AddConversionGoals($request);
}

// Gets one or more conversion goals for the specified conversion goal identifiers.

function GetConversionGoalsByIds($proxy, $conversionGoalIds, $conversionGoalTypes)
{
    $request = new UpdateConversionGoalsRequest();
    $request->ConversionGoalIds = $conversionGoalIds;
    $request->ConversionGoalTypes = $conversionGoalTypes;
    
    return $proxy->GetService()->GetConversionGoalsByIds($request);
}

// Updates one or more conversion goals.

function UpdateConversionGoals($proxy, $conversionGoals)
{
    $request = new UpdateConversionGoalsRequest();
    $request->ConversionGoals = $conversionGoals;
    
    return $proxy->GetService()->UpdateConversionGoals($request);
}

// Adds one or more UET tags.

function AddUetTags($proxy, $uetTags)
{
    $request = new AddUetTagsRequest();
    $request->UetTags = $uetTags;
    
    return $proxy->GetService()->AddUetTags($request);
}

// Gets one or more UET Tags.

function GetUetTagsByIds($proxy, $tagIds)
{
    $request = new GetUetTagsByIdsRequest();
    $request->TagIds = $tagIds;
    
    return $proxy->GetService()->GetUetTagsByIds($request);
}

// Updates one or more UET tags.

function UpdateUetTags($proxy, $uetTags)
{
    $request = new UpdateUetTagsRequest();
    $request->UetTags = $uetTags;
    
    return $proxy->GetService()->UpdateUetTags($request);
}

?>
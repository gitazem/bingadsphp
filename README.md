bingads-php-lib
================

Composer package for the Bing Ads SDK for PHP.

## Library Information

 - Bing Ads API Version 10
 - Library Update  1/5/2017
 - Library [Home Page](https://code.msdn.microsoft.com/Bing-Ads-API-Version-9-in-fb27761f/sourcecode?fileId=166682&pathId=1227957001)

## Installation
```shell
composer require gitazem/bingads-php-lib
```

### Usage

See the [PHP Examples for Bing Ads](http://msdn.microsoft.com/en-US/library/jj966370.aspx) 

##### Getting Started With the Bing Ads API
http://msdn.microsoft.com/en-us/library/bing-ads-getting-started.aspx

##### Server Side OAuth Authentication in PHP
http://msdn.microsoft.com/en-US/library/dn632721.aspx

##### Bing Client Id and Client Secret
These credentials are available after an application is created for the account: https://account.live.com/developers/applications

##### Bing Developer Key
It can be obtain at this URL
https://developers.bingads.microsoft.com/Account

###### This package includes the following PHP sample files for Bing Ads web services. 
 
 + AdExtensions (Campaign Management service)
 + BulkDownloadUpload (Bulk service) 
 + BudgetOpportunities (Ad Insightservice)  
 + ConversionGoals (Campaign Management service)  
 + KeywordsAds (Campaign Management service)
 + ManageClient (Customer Management service)
 + NegativeKeywords (Campaign Management service)
 + RemarketingLists (Campaign Management service)  
 + ReportRequests (Reporting service)
 + SearchUserAccounts (Customer Management service)
 + Targets (Campaign Management service)

###### Building the Sample
The samples require that you update some of the following elements, and then build a project.
 + $UserName 
 + $Password 
 + $DeveloperToken 
 + $CustomerId 
 + $AccountId 
 + $CampaignId 
 + $CampaignIds 

###### Source Code Files
 - AdExtensions.php - Demonstrates how to add, get, and delete extensions for an account’s ad extension library, set, get, and delete the extension associations with a campaign, and determine why an extension failed editorial review using the following Campaign Management service operations.
 - BulkDownloadUpload.php - Demonstrates how to download and upload the entities of one or more campaigns in the background.
 - BudgetOpportunities.php - Demonstrates how to get the budgetopportunities for the specified account.
 - ConversionGoals.php - Demonstrates how to manage UET tags and conversion goals.
 - KeywordsAds.php - Demonstrates how to add ads and keywords to a new ad group, and handle partial errors when some ads or keywords are not successfully created.
 - GetEstimatedBid.php - Demonstrates how to get the minimum suggested bid value of one or more keywords that could result in an ad appearing in the targeted position in the search results.
 - ManageClient.php - Demonstrates how to use agency credentials to invite a client, and use client credentials to accept the invitation. Run this sample multiple times to update and observe the status change, for example from LinkPending to LinkAccepted to Active.
 - NegativeKeywords.php - Demonstrates how to associate negative keywords and negative keyword lists with a campaign.
 - RemarketingLists.php - Demonstrates how to manage remarketing lists and ad group remarketing list associations.
 - ReportRequests.php - Demonstrates how to request and retrieve a keyword performance report.
 - SearchUserAccounts.php - Demonstrates how to search for accounts that can be managed by the current authenticated user.
 - Targets.php - Demonstrates how to associate targets with a campaign and ad group.

###### More Information
For information about updates to Bing Ads web services, see Release Notes here on MSDN:
http://msdn.microsoft.com/en-US/library/bing-ads-overview-release-notes.aspx

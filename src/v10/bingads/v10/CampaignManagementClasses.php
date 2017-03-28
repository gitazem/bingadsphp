<?php
// Generated on 10/27/2016 5:58:30 AM

namespace BingAds\V10\CampaignManagement;

{
    final class CampaignManagementServiceSettings
    {
        const ServiceNamespace = 'https://bingads.microsoft.com/CampaignManagement/v10';
        const ProductionEndpoint = 'https://campaign.api.bingads.microsoft.com/Api/Advertiser/CampaignManagement/V10/CampaignManagementService.svc';
        const SandboxEndpoint = 'https://campaign.api.sandbox.bingads.microsoft.com/Api/Advertiser/CampaignManagement/V10/CampaignManagementService.svc';
    }

    /**
     * Defines the editorial review status values of an ad.
     * @link http://msdn.microsoft.com/en-us/library/cc565084(v=msads.100).aspx AdEditorialStatus Value Set
     * 
     * @used-by Ad
     * @used-by GetAdsByEditorialStatusRequest
     */
    final class AdEditorialStatus
    {
        /** The ad passed editorial review. */
        const Active = 'Active';

        /** The ad failed editorial review. */
        const Disapproved = 'Disapproved';

        /** One or more elements of the ad is undergoing editorial review. */
        const Inactive = 'Inactive';

        /** The ad passed editorial review in one or more markets, and one or more elements of the ad is undergoing editorial review in another market. */
        const ActiveLimited = 'ActiveLimited';
    }

    /**
     * Defines the possible status values of an ad.
     * @link http://msdn.microsoft.com/en-us/library/cc580692(v=msads.100).aspx AdStatus Value Set
     * 
     * @used-by Ad
     */
    final class AdStatus
    {
        /** The ad is undergoing editorial review or has failed editorial review. */
        const Inactive = 'Inactive';

        /** The ad can be served. */
        const Active = 'Active';

        /** The ad will not serve until the owner resumes it. */
        const Paused = 'Paused';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';
    }

    /**
     * Defines the type of ad.
     * @link http://msdn.microsoft.com/en-us/library/bb671537(v=msads.100).aspx AdType Value Set
     * 
     * @used-by Ad
     * @used-by GetAdsByAdGroupIdRequest
     * @used-by GetAdsByEditorialStatusRequest
     * @used-by GetAdsByIdsRequest
     */
    final class AdType
    {
        /** Refers to a TextAd. */
        const Text = 'Text';

        /** Reserved for future use. */
        const Image = 'Image';

        /** Refers to a ProductAd. */
        const Product = 'Product';

        /** Refers to an AppInstallAd. */
        const AppInstall = 'AppInstall';

        /** Refers to an ExpandedTextAd. */
        const ExpandedText = 'ExpandedText';

        /** Refers to a DynamicSearchAd. */
        const DynamicSearch = 'DynamicSearch';
    }

    /**
     * Defines the possible budget types that you can specify for a campaign.
     * @link http://msdn.microsoft.com/en-us/library/bb672035(v=msads.100).aspx BudgetLimitType Value Set
     * 
     * @used-by Budget
     * @used-by Campaign
     */
    final class BudgetLimitType
    {
        /** A monthly budget that is spent until it is depleted. */
        const MonthlyBudgetSpendUntilDepleted = 'MonthlyBudgetSpendUntilDepleted';

        /** A daily budget that is spent until it is depleted. */
        const DailyBudgetAccelerated = 'DailyBudgetAccelerated';

        /** A daily budget that is spread throughout the day. */
        const DailyBudgetStandard = 'DailyBudgetStandard';
    }

    /**
     * Defines the possible status values of a campaign.
     * @link http://msdn.microsoft.com/en-us/library/bb672025(v=msads.100).aspx CampaignStatus Value Set
     * 
     * @used-by Campaign
     */
    final class CampaignStatus
    {
        /** The campaign is active, which indicates that the campaign's ads can be served. */
        const Active = 'Active';

        /** The campaign is paused, which indicates that the campaign's ads will not serve. */
        const Paused = 'Paused';

        /** The campaign is paused, which indicates that the campaign's ads will not serve. */
        const BudgetPaused = 'BudgetPaused';

        /** The campaign is paused, which indicates that the campaign's ads will not serve. */
        const BudgetAndManualPaused = 'BudgetAndManualPaused';

        /** The campaign is deleted. */
        const Deleted = 'Deleted';

        /** Your campaign has been suspended and no ads are eligible for delivery because of potentially fraudulent activity. */
        const Suspended = 'Suspended';
    }

    /**
     * Defines the possible campaign types.
     * @link http://msdn.microsoft.com/en-us/library/dn913129(v=msads.100).aspx CampaignType Value Set
     * 
     * @used-by Campaign
     * @used-by GetCampaignsByAccountIdRequest
     * @used-by GetCampaignsByIdsRequest
     */
    final class CampaignType
    {
        /** The campaign is a Search and Content campaign. */
        const SearchAndContent = 'SearchAndContent';

        /** The campaign is a Bing Shopping campaign. */
        const Shopping = 'Shopping';

        /** The campaign is a Dynamic Search Ads campaign. */
        const DynamicSearchAds = 'DynamicSearchAds';
    }

    /**
     * Defines a list of optional Campaign elements that you can request when calling GetCampaignsByAccountId and GetCampaignsByIds.
     * @link http://msdn.microsoft.com/en-us/library/mt709093(v=msads.100).aspx CampaignAdditionalField Value Set
     * 
     * @used-by GetCampaignsByAccountIdRequest
     * @used-by GetCampaignsByIdsRequest
     */
    final class CampaignAdditionalField
    {
        /** Includes the BiddingScheme element in the Campaign object. */
        const BiddingScheme = 'BiddingScheme';

        /** Includes the BudgetId element in the Campaign object. */
        const BudgetId = 'BudgetId';
        const Languages = 'Languages';
    }

    /**
     * Defines the ad distribution for the ad group.
     * @link http://msdn.microsoft.com/en-us/library/bb671585(v=msads.100).aspx AdDistribution Value Set
     * 
     * @used-by AdGroup
     */
    final class AdDistribution
    {
        /** The search network includes Bing. */
        const Search = 'Search';

        /** The content network is the ad distribution network for Bing Ads running in Windows apps. */
        const Content = 'Content';
    }

    /**
     * Defines the possible ad rotation types that you can apply to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/jj219947(v=msads.100).aspx AdRotationType Value Set
     * 
     * @used-by AdRotation
     */
    final class AdRotationType
    {
        /** Favor the best performing ads. */
        const OptimizeForClicks = 'OptimizeForClicks';

        /** Rotate ads evenly into the auction. */
        const RotateAdsEvenly = 'RotateAdsEvenly';
    }

    /**
     * Defines the bidding model for an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dd796906(v=msads.100).aspx BiddingModel Value Set
     * 
     * @used-by AdGroup
     */
    final class BiddingModel
    {
        const Keyword = 'Keyword';
        const SitePlacement = 'SitePlacement';
    }

    /**
     * Defines the possible search networks on which an ad can display.
     * @link http://msdn.microsoft.com/en-us/library/ff986253(v=msads.100).aspx Network Value Set
     * 
     * @used-by AdGroup
     */
    final class Network
    {
        /** Display ads on owned and operated networks, as well as syndicated search networks. */
        const OwnedAndOperatedAndSyndicatedSearch = 'OwnedAndOperatedAndSyndicatedSearch';

        /** Display ads on only owned and operated networks. */
        const OwnedAndOperatedOnly = 'OwnedAndOperatedOnly';

        /** Display ads on only syndicated search networks. */
        const SyndicatedSearchOnly = 'SyndicatedSearchOnly';
    }

    /**
     * Defines the pricing model for an ad group.
     * @link http://msdn.microsoft.com/en-us/library/cc580680(v=msads.100).aspx PricingModel Value Set
     * 
     * @used-by AdGroup
     */
    final class PricingModel
    {
        /** The pricing model is cost-per-click (CPC). */
        const Cpc = 'Cpc';

        /** The pricing model is cost per thousand-impressions (CPM). */
        const Cpm = 'Cpm';
    }

    /**
     * Defines the targeting setting that is applicable for all remarketing lists that are associated with a given ad group.
     * @link http://msdn.microsoft.com/en-us/library/mt735046(v=msads.100).aspx RemarketingTargetingSetting Value Set
     * 
     * @used-by AdGroup
     */
    final class RemarketingTargetingSetting
    {
        /** Show ads to people searching for your ad, with the option to change the bid amount for people included in the remarketing list. */
        const BidOnly = 'BidOnly';

        /** Show ads only to people included in the remarketing list, with the option to change the bid amount. */
        const TargetAndBid = 'TargetAndBid';
    }

    /**
     * Defines the possible status values of an ad group.
     * @link http://msdn.microsoft.com/en-us/library/bb671715(v=msads.100).aspx AdGroupStatus Value Set
     * 
     * @used-by AdGroup
     */
    final class AdGroupStatus
    {
        /** The ad group is active, which indicates that the ad group's ads can be served. */
        const Active = 'Active';

        /** The ad group is paused, which indicates that the ad group's ads will not serve. */
        const Paused = 'Paused';

        /** The ad group expired. */
        const Expired = 'Expired';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';
    }

    /**
     * Defines a list of optional AdGroup elements that you can request when calling GetAdGroupsByCampaignId and GetAdGroupsByIds.
     * @link http://msdn.microsoft.com/en-us/library/mt709095(v=msads.100).aspx AdGroupAdditionalField Value Set
     * 
     * @used-by GetAdGroupsByCampaignIdRequest
     * @used-by GetAdGroupsByIdsRequest
     */
    final class AdGroupAdditionalField
    {
        /** Includes the BiddingScheme element in the AdGroup object. */
        const BiddingScheme = 'BiddingScheme';

        /** Includes the RemarketingTargetingSetting element in the AdGroup object. */
        const RemarketingTargetingSetting = 'RemarketingTargetingSetting';
    }

    /**
     * Defines the possible age range values that you can use to target ads to users.
     * @link http://msdn.microsoft.com/en-us/library/bb671742(v=msads.100).aspx AgeRange Value Set
     * 
     * @used-by AgeTargetBid
     */
    final class AgeRange
    {
        /** Users from the ages of 18 through 24 years. */
        const EighteenToTwentyFive = 'EighteenToTwentyFive';

        /** Users from the ages of 25 through 34 years. */
        const TwentyFiveToThirtyFive = 'TwentyFiveToThirtyFive';

        /** Users from the ages of 35 through 49 years. */
        const ThirtyFiveToFifty = 'ThirtyFiveToFifty';

        /** Users from the ages of 50 through 64 years. */
        const FiftyToSixtyFive = 'FiftyToSixtyFive';

        /** Users 65 years of age and older. */
        const SixtyFiveAndAbove = 'SixtyFiveAndAbove';
    }

    /**
     * Defines the day values that you can specify for day of the week targeting.
     * @link http://msdn.microsoft.com/en-us/library/bb671717(v=msads.100).aspx Day Value Set
     * 
     * @used-by DayTime
     * @used-by DayTimeTargetBid
     */
    final class Day
    {
        const Sunday = 'Sunday';
        const Monday = 'Monday';
        const Tuesday = 'Tuesday';
        const Wednesday = 'Wednesday';
        const Thursday = 'Thursday';
        const Friday = 'Friday';
        const Saturday = 'Saturday';
    }

    /**
     * Defines the possible minute values for a day and time target hour range.
     * @link http://msdn.microsoft.com/en-us/library/dn743745(v=msads.100).aspx Minute Value Set
     * 
     * @used-by DayTime
     * @used-by DayTimeTargetBid
     */
    final class Minute
    {
        /** The starting or ending minute of the hour range is zero. */
        const Zero = 'Zero';

        /** The starting or ending minute of the hour range is fifteen. */
        const Fifteen = 'Fifteen';

        /** The starting or ending minute of the hour range is thirty. */
        const Thirty = 'Thirty';

        /** The starting or ending minute of the hour range is forty-five. */
        const FortyFive = 'FortyFive';
    }

    /**
     * Defines the genders that are available for ad group or campaign targeting.
     * @link http://msdn.microsoft.com/en-us/library/bb671519(v=msads.100).aspx GenderType Value Set
     * 
     * @used-by GenderTargetBid
     */
    final class GenderType
    {
        const Male = 'Male';
        const Female = 'Female';
    }

    /**
     * Defines the possible intent options for location targeting, for example to target people in, searching for, or viewing pages about your targeted location.
     * @link http://msdn.microsoft.com/en-us/library/dn743742(v=msads.100).aspx IntentOption Value Set
     * 
     * @used-by LocationTarget
     */
    final class IntentOption
    {
        /** Show ads to people in, searching for, or viewing pages about your targeted location. */
        const PeopleInOrSearchingForOrViewingPages = 'PeopleInOrSearchingForOrViewingPages';

        /** Show ads to people in your targeted location. */
        const PeopleIn = 'PeopleIn';

        /** Show ads to people searching for or viewing pages about your targeted location. */
        const PeopleSearchingForOrViewingPages = 'PeopleSearchingForOrViewingPages';
    }

    /**
     * Defines the possible distance units of a geographical location.
     * @link http://msdn.microsoft.com/en-us/library/dn743740(v=msads.100).aspx DistanceUnit Value Set
     * 
     * @used-by RadiusTargetBid
     */
    final class DistanceUnit
    {
        /** The distance of the specified geographical location is specified in miles. */
        const Miles = 'Miles';

        /** The distance of the specified geographical location is specified in kilometers. */
        const Kilometers = 'Kilometers';
    }

    /**
     * Defines the editorial review status values of a keyword.
     * @link http://msdn.microsoft.com/en-us/library/cc565085(v=msads.100).aspx KeywordEditorialStatus Value Set
     * 
     * @used-by Keyword
     * @used-by GetKeywordsByEditorialStatusRequest
     */
    final class KeywordEditorialStatus
    {
        /** The keyword passed editorial review. */
        const Active = 'Active';

        /** The keyword failed editorial review. */
        const Disapproved = 'Disapproved';

        /** One or more elements of the keyword is undergoing editorial review. */
        const Inactive = 'Inactive';

        /** The keyword passed editorial review in one or more markets, and one or more elements of the keyword is undergoing editorial review in another market. */
        const ActiveLimited = 'ActiveLimited';
    }

    /**
     * Defines the possible match types for a keyword bid.
     * @link http://msdn.microsoft.com/en-us/library/dn249974(v=msads.100).aspx MatchType Value Set
     * 
     * @used-by Keyword
     * @used-by NegativeKeyword
     */
    final class MatchType
    {
        /** The keyword match type is Exact. */
        const Exact = 'Exact';

        /** The keyword match type is Phrase. */
        const Phrase = 'Phrase';

        /** The keyword match type is Broad. */
        const Broad = 'Broad';

        /** The keyword match type is Content. */
        const Content = 'Content';
    }

    /**
     * Defines the possible status values of a keyword.
     * @link http://msdn.microsoft.com/en-us/library/bb671482(v=msads.100).aspx KeywordStatus Value Set
     * 
     * @used-by Keyword
     */
    final class KeywordStatus
    {
        /** The keyword can be used to match user search queries. */
        const Active = 'Active';

        /** The keyword cannot be used to match user search queries until the owner resumes it. */
        const Paused = 'Paused';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';

        /** The keyword is undergoing editorial review or has failed editorial review. */
        const Inactive = 'Inactive';
    }

    /**
     * Defines a list of optional Keyword elements that you can request when calling GetKeywordsByAdGroupId, GetKeywordsByEditorialStatus, and GetKeywordsByIds.
     * @link http://msdn.microsoft.com/en-us/library/mt709096(v=msads.100).aspx KeywordAdditionalField Value Set
     * 
     * @used-by GetKeywordsByAdGroupIdRequest
     * @used-by GetKeywordsByEditorialStatusRequest
     * @used-by GetKeywordsByIdsRequest
     */
    final class KeywordAdditionalField
    {
        /** Includes the BiddingScheme element in the Keyword object. */
        const BiddingScheme = 'BiddingScheme';
    }

    /**
     * Defines the possible types of entities.
     * @link http://msdn.microsoft.com/en-us/library/jj622172(v=msads.100).aspx EntityType Value Set
     * 
     * @used-by AppealEditorialRejectionsRequest
     * @used-by GetEditorialReasonsByIdsRequest
     */
    final class EntityType
    {
        /** The entity is a Campaign object. */
        const Campaign = 'Campaign';

        /** The entity is an AdGroup object. */
        const AdGroup = 'AdGroup';

        /** The entity is a Target object. */
        const Target = 'Target';

        /** The entity is an Ad object or an object that derives from it, such as the TextAd object. */
        const Ad = 'Ad';

        /** The entity is a Keyword object. */
        const Keyword = 'Keyword';

        /** For future use. */
        const AdExtension = 'AdExtension';
        const AdGroupCriterion = 'AdGroupCriterion';
    }

    /**
     * Defines the status of a website placement bid.
     * @link http://msdn.microsoft.com/en-us/library/dd797148(v=msads.100).aspx SitePlacementStatus Value Set
     * 
     * @used-by SitePlacement
     */
    final class SitePlacementStatus
    {
        const Active = 'Active';
        const Paused = 'Paused';
        const Deleted = 'Deleted';
        const Inactive = 'Inactive';
    }

    /**
     * Defines the values that you use to determine whether an editorial rejection is appealable.
     * @link http://msdn.microsoft.com/en-us/library/jj631643(v=msads.100).aspx AppealStatus Value Set
     * 
     * @used-by EditorialReasonCollection
     */
    final class AppealStatus
    {
        /** The editorial rejection is appealable. */
        const Appealable = 'Appealable';

        /** The editorial rejection is appealable and an appeal has been submitted. */
        const AppealPending = 'AppealPending';

        /** The editorial rejection is not appealable. */
        const NotAppealable = 'NotAppealable';
    }

    /**
     * Defines the possible migration status values.
     * @link http://msdn.microsoft.com/en-us/library/mt706123(v=msads.100).aspx MigrationStatus Value Set
     * 
     * @used-by MigrationStatusInfo
     */
    final class MigrationStatus
    {
        /** None of the accounts for the customer are in the queue for the corresponding migration type. */
        const NotInPilot = 'NotInPilot';

        /** The account is in the queue for the corresponding migration type, but the migration has not yet begun. */
        const NotStarted = 'NotStarted';

        /** The migration is in progress. */
        const InProgress = 'InProgress';

        /** The migration is complete, or migration is not needed because the account was created after all of the customer's other accounts were added to the pilot queue for the corresponding migration type. */
        const Completed = 'Completed';
    }

    /**
     * Defines the possible status values of an ad extension.
     * @link http://msdn.microsoft.com/en-us/library/jj134386(v=msads.100).aspx AdExtensionStatus Value Set
     * 
     * @used-by AdExtension
     */
    final class AdExtensionStatus
    {
        /** The ad extension is active. */
        const Active = 'Active';

        /** The ad extension is deleted. */
        const Deleted = 'Deleted';
    }

    /**
     * Defines the possible status values that indicate the progress of determining the latitude and longitude values of a business.
     * @link http://msdn.microsoft.com/en-us/library/dd796820(v=msads.100).aspx BusinessGeoCodeStatus Value Set
     * 
     * @used-by LocationAdExtension
     */
    final class BusinessGeoCodeStatus
    {
        /** In the process of determining the latitude and longitude of the business. */
        const Pending = 'Pending';

        /** Successfully determined the latitude and longitude of the business. */
        const Complete = 'Complete';

        /** Unable to determine the latitude and longitude of the business, possibly because the address did not resolve. */
        const Invalid = 'Invalid';

        /** Unable to determine the latitude and longitude of the business. */
        const Failed = 'Failed';
    }

    /**
     * Defines the possible ad extension types.
     * @link http://msdn.microsoft.com/en-us/library/jj134394(v=msads.100).aspx AdExtensionsTypeFilter Value Set
     * 
     * @used-by GetAdExtensionIdsByAccountIdRequest
     * @used-by GetAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsByIdsRequest
     */
    final class AdExtensionsTypeFilter
    {
        /** An ad extension that contains multiple site links. */
        const SiteLinksAdExtension = 'SiteLinksAdExtension';

        /** An ad extension that contains the address and phone number of the business. */
        const LocationAdExtension = 'LocationAdExtension';

        /** An ad extension that contains a phone number and whether it's the only clickable item in an ad. */
        const CallAdExtension = 'CallAdExtension';

        /** An ad extension that contains an image with alternative text. */
        const ImageAdExtension = 'ImageAdExtension';

        /** An ad extension that contains a link to install an application from a supported app store. */
        const AppAdExtension = 'AppAdExtension';

        /** An ad extension that contains third-party reviews (exact or paraphrased) about your business, products, or services. */
        const ReviewAdExtension = 'ReviewAdExtension';

        /** An ad extension that contains additional text in the ad that can describe more about your business, products, or services. */
        const CalloutAdExtension = 'CalloutAdExtension';

        /** An ad extension that contains one site link. */
        const Sitelink2AdExtension = 'Sitelink2AdExtension';

        /** An ad extension that contains a header and values that tell customers more about your business. */
        const StructuredSnippetAdExtension = 'StructuredSnippetAdExtension';
    }

    /**
     * Defines a list of optional AdExtension elements that you can request when calling GetAdExtensionsAssociations and GetAdExtensionsByIds.
     * @link http://msdn.microsoft.com/en-us/library/mt763243(v=msads.100).aspx AdExtensionAdditionalField Value Set
     * 
     * @used-by GetAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsByIdsRequest
     */
    final class AdExtensionAdditionalField
    {
        /** Includes the Scheduling element in the AdExtension or SiteLink object. */
        const Scheduling = 'Scheduling';
    }

    /**
     * Defines the entity type or types associated with an ad extension.
     * @link http://msdn.microsoft.com/en-us/library/dn249973(v=msads.100).aspx AssociationType Value Set
     * 
     * @used-by AdExtensionAssociation
     * @used-by DeleteAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionIdsByAccountIdRequest
     * @used-by GetAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsEditorialReasonsRequest
     * @used-by SetAdExtensionsAssociationsRequest
     */
    final class AssociationType
    {
        /** Specifies ad extension associations with campaigns. */
        const Campaign = 'Campaign';

        /** Specifies ad extension associations with ad groups. */
        const AdGroup = 'AdGroup';

        /** Reserved for future use. */
        const Account = 'Account';
    }

    /**
     * Defines the editorial review status values of an ad extension.
     * @link http://msdn.microsoft.com/en-us/library/dn249989(v=msads.100).aspx AdExtensionEditorialStatus Value Set
     * 
     * @used-by AdExtensionAssociation
     */
    final class AdExtensionEditorialStatus
    {
        /** The ad extension passed editorial review. */
        const Active = 'Active';

        /** The ad extension failed editorial review. */
        const Disapproved = 'Disapproved';

        /** One or more elements of the ad extension is undergoing editorial review. */
        const Inactive = 'Inactive';

        /** The ad extension passed editorial review in one or more markets, and one or more elements of the ad extension is undergoing editorial review in another market. */
        const ActiveLimited = 'ActiveLimited';
    }

    /**
     * Defines the possible values representing entities that are enabled for media such as images.
     * @link http://msdn.microsoft.com/en-us/library/dn766195(v=msads.100).aspx MediaEnabledEntityFilter Value Set
     * 
     * @used-by MediaAssociation
     * @used-by GetMediaAssociationsRequest
     * @used-by GetMediaMetaDataByAccountIdRequest
     */
    final class MediaEnabledEntityFilter
    {
        /** The media enabled entity is an ImageAdExtension. */
        const ImageAdExtension = 'ImageAdExtension';
    }

    /**
     * Defines the possible types of ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/jj689543(v=msads.100).aspx CriterionType Value Set
     * 
     * @used-by AddAdGroupCriterionsRequest
     * @used-by DeleteAdGroupCriterionsRequest
     * @used-by GetAdGroupCriterionsByIdsRequest
     * @used-by UpdateAdGroupCriterionsRequest
     */
    final class CriterionType
    {
        /** Represents a Bing Shopping campaign's ad group product partition criterion. */
        const ProductPartition = 'ProductPartition';

        /** Represents a Dynamic Search Ads campaign's ad group webpage criterion. */
        const Webpage = 'Webpage';
    }

    /**
     * Defines the possible types of product partitions.
     * @link http://msdn.microsoft.com/en-us/library/dn913120(v=msads.100).aspx ProductPartitionType Value Set
     * 
     * @used-by ProductPartition
     */
    final class ProductPartitionType
    {
        /** The ProductPartition is a product group subdivision. */
        const Subdivision = 'Subdivision';

        /** The ProductPartition is a product group unit. */
        const Unit = 'Unit';
    }

    /**
     * Defines the operands that can be applied to arguments of a webpage condition or criterion for dynamic search ads.
     * @link http://msdn.microsoft.com/en-us/library/mt772365(v=msads.100).aspx WebpageConditionOperand Value Set
     * 
     * @used-by WebpageCondition
     */
    final class WebpageConditionOperand
    {
        /** Reserved for future use. */
        const Unknown = 'Unknown';

        /** The argument will match if it is a partial URL of your site that is indexed by Bing. */
        const Url = 'Url';

        /** The argument will match if exactly matches one of the categories that Bing thinks is applicable for your site. */
        const Category = 'Category';

        /** The argument will match any of your site's page titles that are indexed by Bing. */
        const PageTitle = 'PageTitle';

        /** The argument will match any of your site's content that is indexed by Bing. */
        const PageContent = 'PageContent';
    }

    /**
     * Defines the possible status values that determine whether to apply the criterion to the ad group.
     * @link http://msdn.microsoft.com/en-us/library/jj689542(v=msads.100).aspx AdGroupCriterionStatus Value Set
     * 
     * @used-by AdGroupCriterion
     */
    final class AdGroupCriterionStatus
    {
        /** Apply the criterion to the ad group. */
        const Active = 'Active';

        /** Do not apply the criterion to the ad group. */
        const Paused = 'Paused';

        /** The criterion was deleted. */
        const Deleted = 'Deleted';
    }

    /**
     * Defines the editorial review status values of an ad group criterion.
     * @link http://msdn.microsoft.com/en-us/library/dn195643(v=msads.100).aspx AdGroupCriterionEditorialStatus Value Set
     * 
     * @used-by BiddableAdGroupCriterion
     */
    final class AdGroupCriterionEditorialStatus
    {
        /** The criterion passed editorial review. */
        const Active = 'Active';

        /** The criterion failed editorial review. */
        const Disapproved = 'Disapproved';

        /** The criterion is undergoing editorial review. */
        const Inactive = 'Inactive';

        /** The criterion passed editorial review in one or more markets, and one or more elements of the criterion is undergoing editorial review in another market. */
        const ActiveLimited = 'ActiveLimited';
    }

    /**
     * Defines the possible types of item actions, for example to add, delete, or update the BiddableAdGroupCriterion or NegativeAdGroupCriterion, specifically one that contains a ProductPartition.
     * @link http://msdn.microsoft.com/en-us/library/dn913119(v=msads.100).aspx ItemAction Value Set
     * 
     * @used-by AdGroupCriterionAction
     */
    final class ItemAction
    {
        /** The requested action is to add the item, for example add the ProductPartition. */
        const Add = 'Add';

        /** The requested action is to delete the item, for example delete the ProductPartition. */
        const Delete = 'Delete';

        /** The requested action is to update the item, for example update the ProductPartition. */
        const Update = 'Update';
    }

    /**
     * Defines the possible types of campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913131(v=msads.100).aspx CampaignCriterionType Value Set
     * 
     * @used-by AddCampaignCriterionsRequest
     * @used-by DeleteCampaignCriterionsRequest
     * @used-by GetCampaignCriterionsByIdsRequest
     * @used-by UpdateCampaignCriterionsRequest
     */
    final class CampaignCriterionType
    {
        /** The criterion identifies a Bing Shopping campaign product scope criterion. */
        const ProductScope = 'ProductScope';

        /** The criterion identifies a Dynamic Search Ads campaign webpage criterion. */
        const Webpage = 'Webpage';
    }

    /**
     * Defines the operators that can be applied to remarketing list rule item string values.
     * @link http://msdn.microsoft.com/en-us/library/mt772368(v=msads.100).aspx StringOperator Value Set
     * 
     * @used-by CustomEventsRule
     * @used-by StringRuleItem
     */
    final class StringOperator
    {
        /** Reserved for future use. */
        const None = 'None';

        /** Equals the corresponding string value. */
        const Equals = 'Equals';

        /** Contain the corresponding string value. */
        const Contains = 'Contains';

        /** Begin with the corresponding string value. */
        const BeginsWith = 'BeginsWith';

        /** Does not end with the corresponding string value. */
        const EndsWith = 'EndsWith';

        /** Does not equal the corresponding string value. */
        const NotEquals = 'NotEquals';

        /** Does not contain the corresponding string value. */
        const DoesNotContain = 'DoesNotContain';

        /** Does not begin with the corresponding string value. */
        const DoesNotBeginWith = 'DoesNotBeginWith';

        /** Does not end with the corresponding string value. */
        const DoesNotEndWith = 'DoesNotEndWith';
    }

    /**
     * Defines the operators that can be applied to remarketing list rule item number values.
     * @link http://msdn.microsoft.com/en-us/library/mt772366(v=msads.100).aspx NumberOperator Value Set
     * 
     * @used-by CustomEventsRule
     */
    final class NumberOperator
    {
        /** Reserved for future use. */
        const None = 'None';

        /** Equals the corresponding number value. */
        const Equals = 'Equals';

        /** Greater than the corresponding number value. */
        const GreaterThan = 'GreaterThan';

        /** Less than the corresponding number value. */
        const LessThan = 'LessThan';

        /** Greater than or equal to the corresponding number value. */
        const GreaterThanEqualTo = 'GreaterThanEqualTo';

        /** Less than or equal to the corresponding number value. */
        const LessThanEqualTo = 'LessThanEqualTo';
    }

    /**
     * Defines values that you can use to determine whether the remarketing list can only be associated with ad groups within one specified account, or can be associated with any ad groups across all of the customer's accounts.
     * @link http://msdn.microsoft.com/en-us/library/mt735045(v=msads.100).aspx EntityScope Value Set
     * 
     * @used-by ConversionGoal
     * @used-by RemarketingList
     */
    final class EntityScope
    {
        /** The remarketing list can only be associated with ad groups within one specified account. */
        const Account = 'Account';

        /** The remarketing list can be associated with any ad groups across all of the customer's accounts. */
        const Customer = 'Customer';
    }

    /**
     * Defines a list of optional RemarketingList elements that you can request when calling GetRemarketingLists.
     * @link http://msdn.microsoft.com/en-us/library/mt735044(v=msads.100).aspx RemarketingListAdditionalField Value Set
     * 
     * @used-by GetRemarketingListsRequest
     */
    final class RemarketingListAdditionalField
    {
        /** Includes the Rule element in the RemarketingList object. */
        const Rule = 'Rule';
    }

    /**
     * Defines the status values of an ad group remarketing list association.
     * @link http://msdn.microsoft.com/en-us/library/mt735043(v=msads.100).aspx AdGroupRemarketingListAssociationStatus Value Set
     * 
     * @used-by AdGroupRemarketingListAssociation
     */
    final class AdGroupRemarketingListAssociationStatus
    {
        /** The ad group remarketing list association is active. */
        const Active = 'Active';

        /** The ad group remarketing list association is paused. */
        const Paused = 'Paused';

        /** Reserved for internal use. */
        const Deleted = 'Deleted';
    }

    /**
     * Defines the possible system-determined status values of a UET tag.
     * @link http://msdn.microsoft.com/en-us/library/mt759560(v=msads.100).aspx UetTagTrackingStatus Value Set
     * 
     * @used-by UetTag
     */
    final class UetTagTrackingStatus
    {
        const Unverified = 'Unverified';
        const Active = 'Active';
        const Inactive = 'Inactive';
    }

    /**
     * Defines the current possible types of conversion goals.
     * @link http://msdn.microsoft.com/en-us/library/mt759557(v=msads.100).aspx ConversionGoalType Value Set
     * 
     * @used-by ConversionGoal
     * @used-by GetConversionGoalsByIdsRequest
     * @used-by GetConversionGoalsByTagIdsRequest
     */
    final class ConversionGoalType
    {
        /** Refers to a UrlGoal */
        const Url = 'Url';

        /** Refers to a DurationGoal */
        const Duration = 'Duration';

        /** Refers to a PagesViewedPerVisitGoal */
        const PagesViewedPerVisit = 'PagesViewedPerVisit';

        /** Refers to an EventGoal */
        const Event = 'Event';

        /** Refers to an AppInstallGoal */
        const AppInstall = 'AppInstall';
    }

    /**
     * Defines how your conversions are recorded within your chosen conversion window.
     * @link http://msdn.microsoft.com/en-us/library/mt759553(v=msads.100).aspx ConversionGoalCountType Value Set
     * 
     * @used-by ConversionGoal
     */
    final class ConversionGoalCountType
    {
        /** All conversions that happen after an ad click will be counted. */
        const All = 'All';

        /** Only one conversion that happens after an ad click will be counted. */
        const Unique = 'Unique';
    }

    /**
     * Defines conversion goal revenue models that you can use to track how much each conversion is worth to your business.
     * @link http://msdn.microsoft.com/en-us/library/mt759556(v=msads.100).aspx ConversionGoalRevenueType Value Set
     * 
     * @used-by ConversionGoalRevenue
     */
    final class ConversionGoalRevenueType
    {
        /** Each time it happens, the conversion has the same value. */
        const FixedValue = 'FixedValue';

        /** The value of the conversion may vary for example, by purchase price. */
        const VariableValue = 'VariableValue';

        /** Don't assign a value for the conversion. */
        const NoValue = 'NoValue';
    }

    /**
     * Defines the possible user-determined status values of a conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759554(v=msads.100).aspx ConversionGoalStatus Value Set
     * 
     * @used-by ConversionGoal
     */
    final class ConversionGoalStatus
    {
        /** The conversion goal is active. */
        const Active = 'Active';

        /** The conversion goal is paused. */
        const Paused = 'Paused';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';
    }

    /**
     * Defines the possible system-determined status values of a conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759558(v=msads.100).aspx ConversionGoalTrackingStatus Value Set
     * 
     * @used-by ConversionGoal
     */
    final class ConversionGoalTrackingStatus
    {
        const TagUnverified = 'TagUnverified';
        const NoRecentConversions = 'NoRecentConversions';
        const RecordingConversions = 'RecordingConversions';
        const TagInactive = 'TagInactive';
    }

    /**
     * Defines the operators that can be applied to expressions within a conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759561(v=msads.100).aspx ExpressionOperator Value Set
     * 
     * @used-by EventGoal
     * @used-by UrlGoal
     */
    final class ExpressionOperator
    {
        /** The property should be equal to the corresponding fixed string expression. */
        const Equals = 'Equals';

        /** The property should begin with the corresponding fixed string expression. */
        const BeginsWith = 'BeginsWith';

        /** The property should match the corresponding regular expression. */
        const RegularExpression = 'RegularExpression';

        /** The property should contain the corresponding fixed string expression. */
        const Contains = 'Contains';
    }

    /**
     * Defines the operators that can be applied to values within a conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759562(v=msads.100).aspx ValueOperator Value Set
     * 
     * @used-by EventGoal
     */
    final class ValueOperator
    {
        /** The property should be equal to the corresponding value. */
        const Equals = 'Equals';

        /** The property should be less than the corresponding value. */
        const LessThan = 'LessThan';

        /** The property should be greater than the corresponding value. */
        const GreaterThan = 'GreaterThan';
    }

    /**
     * Defines an object that contains migration status for an account.
     * @link http://msdn.microsoft.com/en-us/library/mt706124(v=msads.100).aspx AccountMigrationStatusesInfo Data Object
     * 
     * @uses MigrationStatusInfo
     * @used-by GetAccountMigrationStatusesResponse
     */
    final class AccountMigrationStatusesInfo
    {
        /**
         * The Bing Ads identifier of the account.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of migration status info for the corresponding account.
         * @var MigrationStatusInfo[]
         */
        public $MigrationStatusInfo;
    }

    /**
     * Defines the base object of an ad.
     * @link http://msdn.microsoft.com/en-us/library/bb671952(v=msads.100).aspx Ad Data Object
     * 
     * @uses AdEditorialStatus
     * @uses AppUrl
     * @uses KeyValuePairOfstringstring
     * @uses AdStatus
     * @uses AdType
     * @uses CustomParameters
     * @used-by AddAdsRequest
     * @used-by GetAdsByAdGroupIdResponse
     * @used-by GetAdsByEditorialStatusResponse
     * @used-by GetAdsByIdsResponse
     * @used-by UpdateAdsRequest
     */
    class Ad
    {
        /**
         * Determines the device preference for showing the ad.
         * @var integer
         */
        public $DevicePreference;

        /**
         * The editorial review status of the ad, which indicates whether the ad is pending review, has been approved, or has been disapproved.
         * @var AdEditorialStatus
         */
        public $EditorialStatus;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * The mobile landing page URL.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * The last or final URL where a user is ultimately taken, whether or not the click to final URL path included any redirects.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Bing Ads identifier for the ad.
         * @var integer
         */
        public $Id;

        /**
         * The status of the ad.
         * @var AdStatus
         */
        public $Status;

        /**
         * The tracking template to use as a default for all FinalUrls and FinalMobileUrls.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * The type of the ad.
         * @var AdType
         */
        public $Type;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/dd796873(v=msads.100).aspx AdApiError Data Object
     * 
     * @used-by AdApiFaultDetail
     */
    final class AdApiError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that contains additional details about the error.
         * @var string
         */
        public $Detail;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

    /**
     * Defines the base object from which all fault detail objects derive.
     * @link http://msdn.microsoft.com/en-us/library/dd796870(v=msads.100).aspx ApplicationFault Data Object
     */
    class ApplicationFault
    {
        /**
         * The identifier of the log entry that contains the details of the API call.
         * @var string
         */
        public $TrackingId;
    }

    /**
     * Defines a fault object that operations return when generic errors occur, such as an authentication error.
     * @link http://msdn.microsoft.com/en-us/library/dd797002(v=msads.100).aspx AdApiFaultDetail Data Object
     * 
     * @uses AdApiError
     */
    final class AdApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of AdApiError objects that contains the details that explain why the service operation failed.
         * @var AdApiError[]
         */
        public $Errors;
    }

    /**
     * Defines a postal address.
     * @link http://msdn.microsoft.com/en-us/library/jj721596(v=msads.100).aspx Address Data Object
     * 
     * @used-by LocationAdExtension
     */
    final class Address
    {
        /**
         * The name of the city where the street address is located.
         * @var string
         */
        public $CityName;

        /**
         * The country where the street address is located.
         * @var string
         */
        public $CountryCode;

        /**
         * The postal or zip code.
         * @var string
         */
        public $PostalCode;

        /**
         * A code that identifies the state or province where the street address is located.
         * @var string
         */
        public $ProvinceCode;

        /**
         * The name of the state or province where the street address is located.
         * @var string
         */
        public $ProvinceName;

        /**
         * The first line of the address.
         * @var string
         */
        public $StreetAddress;

        /**
         * The second line of the address.
         * @var string
         */
        public $StreetAddress2;
    }

    /**
     * Defines the base object of an ad extension.
     * @link http://msdn.microsoft.com/en-us/library/hh527708(v=msads.100).aspx AdExtension Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @uses Schedule
     * @uses AdExtensionStatus
     * @used-by AdExtensionAssociation
     * @used-by AddAdExtensionsRequest
     * @used-by GetAdExtensionsByIdsResponse
     * @used-by UpdateAdExtensionsRequest
     */
    class AdExtension
    {
        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Bing Ads identifier of the ad extension.
         * @var integer
         */
        public $Id;

        /**
         * Determines the calendar day and time ranges when the ad extension is eligible to be shown in ads.
         * @var Schedule
         */
        public $Scheduling;

        /**
         * The status of the ad extension.
         * @var AdExtensionStatus
         */
        public $Status;

        /**
         * The type of ad extension.
         * @var string
         */
        public $Type;

        /**
         * The number of times the contents of the ad extension has been updated.
         * @var integer
         */
        public $Version;
    }

    /**
     * Defines an object that associates an ad extension and its editorial status to a supported entity, for example ad group or campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn250012(v=msads.100).aspx AdExtensionAssociation Data Object
     * 
     * @uses AdExtension
     * @uses AssociationType
     * @uses AdExtensionEditorialStatus
     * @used-by AdExtensionAssociationCollection
     */
    final class AdExtensionAssociation
    {
        /**
         * The ad extension associated with a supported entity.
         * @var AdExtension
         */
        public $AdExtension;

        /**
         * The type of entity associated with the ad extension.
         * @var AssociationType
         */
        public $AssociationType;

        /**
         * The editorial status of the ad extension.
         * @var AdExtensionEditorialStatus
         */
        public $EditorialStatus;

        /**
         * The identifier of an entity associated with the ad extension.
         * @var integer
         */
        public $EntityId;
    }

    /**
     * Defines an array of objects that associate an ad extension and its editorial status to a supported entity, for example ad group or campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn250010(v=msads.100).aspx AdExtensionAssociationCollection Data Object
     * 
     * @uses AdExtensionAssociation
     * @used-by GetAdExtensionsAssociationsResponse
     */
    final class AdExtensionAssociationCollection
    {
        /**
         * An array of objects that associate an ad extension and its editorial status to a supported entity, for example ad group or campaign.
         * @var AdExtensionAssociation[]
         */
        public $AdExtensionAssociations;
    }

    /**
     * Defines an object that you can use to determine the component of an ad extension that failed editorial review, and the reason for the failure.
     * @link http://msdn.microsoft.com/en-us/library/jj134398(v=msads.100).aspx AdExtensionEditorialReason Data Object
     * 
     * @used-by AdExtensionEditorialReasonCollection
     */
    final class AdExtensionEditorialReason
    {
        /**
         * The component of the ad extension that failed editorial review.
         * @var string
         */
        public $Location;

        /**
         * The list of publisher countries whose editorial guidelines do not allow the specified term.
         * @var string[]
         */
        public $PublisherCountries;

        /**
         * A code that identifies the reason for the failure.
         * @var integer
         */
        public $ReasonCode;

        /**
         * The term that failed editorial review.
         * @var string
         */
        public $Term;
    }

    /**
     * Defines a collection of ad extensions that failed editorial review.
     * @link http://msdn.microsoft.com/en-us/library/jj134393(v=msads.100).aspx AdExtensionEditorialReasonCollection Data Object
     * 
     * @uses AdExtensionEditorialReason
     * @used-by GetAdExtensionsEditorialReasonsResponse
     */
    final class AdExtensionEditorialReasonCollection
    {
        /**
         * The identifier of the ad extension that failed editorial review.
         * @var integer
         */
        public $AdExtensionId;

        /**
         * A list of AdExtensionEditorialReason objects that identify the component of an ad extension that failed editorial review, and the reason for the failure.
         * @var AdExtensionEditorialReason[]
         */
        public $Reasons;
    }

    /**
     * Defines an object that identifies an ad extension revision.
     * @link http://msdn.microsoft.com/en-us/library/jj134392(v=msads.100).aspx AdExtensionIdentity Data Object
     * 
     * @used-by AddAdExtensionsResponse
     */
    final class AdExtensionIdentity
    {
        /**
         * The system-generated identifier of the ad extension.
         * @var integer
         */
        public $Id;

        /**
         * The number of times the contents of the ad extension has been updated.
         * @var integer
         */
        public $Version;
    }

    /**
     * Defines an object that associates an ad extension to a supported entity, for example ad group or campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn249980(v=msads.100).aspx AdExtensionIdToEntityIdAssociation Data Object
     * 
     * @used-by DeleteAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsEditorialReasonsRequest
     * @used-by SetAdExtensionsAssociationsRequest
     */
    final class AdExtensionIdToEntityIdAssociation
    {
        /**
         * The system-generated identifier of the ad extension.
         * @var integer
         */
        public $AdExtensionId;

        /**
         * The identifier of an entity associated with the ad extension.
         * @var integer
         */
        public $EntityId;
    }

    /**
     * Defines an ad group.
     * @link http://msdn.microsoft.com/en-us/library/bb671956(v=msads.100).aspx AdGroup Data Object
     * 
     * @uses AdDistribution
     * @uses AdRotation
     * @uses BiddingModel
     * @uses BiddingScheme
     * @uses Bid
     * @uses Date
     * @uses KeyValuePairOfstringstring
     * @uses Network
     * @uses PricingModel
     * @uses RemarketingTargetingSetting
     * @uses Setting
     * @uses AdGroupStatus
     * @uses CustomParameters
     * @used-by AddAdGroupsRequest
     * @used-by GetAdGroupsByCampaignIdResponse
     * @used-by GetAdGroupsByIdsResponse
     * @used-by UpdateAdGroupsRequest
     */
    final class AdGroup
    {
        /**
         * Determines whether the ads within this ad group will be displayed on the content distribution channel, search distribution channel, or both.
         * @var AdDistribution
         */
        public $AdDistribution;

        /**
         * Determines the ad rotation type.
         * @var AdRotation
         */
        public $AdRotation;

        /**
         * Determines whether the ad group bids on keyword matches or site placement matches.
         * @var BiddingModel
         */
        public $BiddingModel;

        /**
         * The bid strategy type for how you want to manage your bids.
         * @var BiddingScheme
         */
        public $BiddingScheme;

        /**
         * The bid to use when the keywords that the service extracts from the content page and the ad group's keywords match by using an exact match comparison.
         * @var Bid
         */
        public $ContentMatchBid;

        /**
         * The date that the ads in the ad group will expire.
         * @var Date
         */
        public $EndDate;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The system generated identifier of the ad group.
         * @var integer
         */
        public $Id;

        /**
         * The language of the ads and keywords in the ad group.
         * @var string
         */
        public $Language;

        /**
         * The name of the ad group.
         * @var string
         */
        public $Name;

        /**
         * The percent amount by which to adjust your bid for native ads above or below the base ad group or keyword bid.
         * @var integer
         */
        public $NativeBidAdjustment;

        /**
         * The search networks where you want your ads to display.
         * @var Network
         */
        public $Network;

        /**
         * You can specify a pricing model based on cost per click (CPC) or cost per 1000 impressions (CPM).
         * @var PricingModel
         */
        public $PricingModel;

        /**
         * The targeting setting that is applicable for all remarketing lists that are associated with this ad group.
         * @var RemarketingTargetingSetting
         */
        public $RemarketingTargetingSetting;

        /**
         * The default bid to use when the user's query and the ad group's keywords match by using either a broad, exact, or phrase match comparison.
         * @var Bid
         */
        public $SearchBid;

        /**
         * Reserved for future use.
         * @var Setting[]
         */
        public $Settings;

        /**
         * The date that the ads in the ad group can begin serving; otherwise, the service can begin serving the ads in the ad group the day that the ad group becomes active.
         * @var Date
         */
        public $StartDate;

        /**
         * The status of the ad group.
         * @var AdGroupStatus
         */
        public $Status;

        /**
         * The tracking template to use as a default for all URLs in your ad group.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

    /**
     * Defines a criterion that you want applied to the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/jj738614(v=msads.100).aspx AdGroupCriterion Data Object
     * 
     * @uses Criterion
     * @uses AdGroupCriterionStatus
     * @used-by AdGroupCriterionAction
     * @used-by AddAdGroupCriterionsRequest
     * @used-by GetAdGroupCriterionsByIdsResponse
     * @used-by UpdateAdGroupCriterionsRequest
     */
    class AdGroupCriterion
    {
        /**
         * The identifier of the ad group to apply the criterion to.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The criterion to apply to the ad group.
         * @var Criterion
         */
        public $Criterion;

        /**
         * The unique Bing Ads identifier for the ad group criterion.
         * @var integer
         */
        public $Id;

        /**
         * A status value that determines whether to apply the criterion to the ad group.
         * @var AdGroupCriterionStatus
         */
        public $Status;

        /**
         * The type of ad group criterion.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines the action to apply to a BiddableAdGroupCriterion or NegativeAdGroupCriterion, specifically one that contains a ProductPartition.
     * @link http://msdn.microsoft.com/en-us/library/dn913128(v=msads.100).aspx AdGroupCriterionAction Data Object
     * 
     * @uses ItemAction
     * @uses AdGroupCriterion
     * @used-by ApplyProductPartitionActionsRequest
     */
    final class AdGroupCriterionAction
    {
        /**
         * The action to be applied for the AdGroupCriterion.
         * @var ItemAction
         */
        public $Action;

        /**
         * The BiddableAdGroupCriterion or NegativeAdGroupCriterion, either of which must contain a ProductPartition criterion.
         * @var AdGroupCriterion
         */
        public $AdGroupCriterion;
    }

    /**
     * Defines an object that contains the negative site URLs of an ad group.
     * @link http://msdn.microsoft.com/en-us/library/hh300117(v=msads.100).aspx AdGroupNegativeSites Data Object
     * 
     * @used-by GetNegativeSitesByAdGroupIdsResponse
     * @used-by SetNegativeSitesToAdGroupsRequest
     */
    final class AdGroupNegativeSites
    {
        /**
         * The identifier of the ad group to which the negative site URLs belong.
         * @var integer
         */
        public $AdGroupId;

        /**
         * A list of URLs of the websites on which you do not want your ads displayed.
         * @var string[]
         */
        public $NegativeSites;
    }

    /**
     * Represents the association between an ad group and a remarketing list.
     * @link http://msdn.microsoft.com/en-us/library/mt735042(v=msads.100).aspx AdGroupRemarketingListAssociation Data Object
     * 
     * @uses AdGroupRemarketingListAssociationStatus
     * @used-by AddAdGroupRemarketingListAssociationsRequest
     * @used-by DeleteAdGroupRemarketingListAssociationsRequest
     * @used-by GetAdGroupRemarketingListAssociationsResponse
     * @used-by UpdateAdGroupRemarketingListAssociationsRequest
     */
    final class AdGroupRemarketingListAssociation
    {
        /**
         * The Bing Ads identifier of the ad group associated with the remarketing list.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The percentage you want to increase/decrease the bid amount for the remarketing list.
         * @var double
         */
        public $BidAdjustment;

        /**
         * The Bing Ads identifier for the association between an ad group and remarketing list.
         * @var integer
         */
        public $Id;

        /**
         * Determines whether or not the remarketing list should be associated or excluded for the ad group.
         * @var boolean
         */
        public $IsExcluded;

        /**
         * The Bing Ads identifier of the remarketing list associated with the ad group.
         * @var integer
         */
        public $RemarketingListId;

        /**
         * The association status.
         * @var AdGroupRemarketingListAssociationStatus
         */
        public $Status;
    }

    /**
     * Defines an object that specifies the type of ad rotation to apply to the ad group.
     * @link http://msdn.microsoft.com/en-us/library/jj219952(v=msads.100).aspx AdRotation Data Object
     * 
     * @uses AdRotationType
     * @used-by AdGroup
     */
    final class AdRotation
    {
        /**
         * Reserved for future use only.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * Reserved for future use only.
         * @var \DateTime
         */
        public $StartDate;

        /**
         * The type of ad rotation to apply to the ad group.
         * @var AdRotationType
         */
        public $Type;
    }

    /**
     * Defines a list of age ranges to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/bb672084(v=msads.100).aspx AgeTarget Data Object
     * 
     * @uses AgeTargetBid
     * @used-by Target
     */
    final class AgeTarget
    {
        /**
         * An array of of age ranges to target with bid adjustments.
         * @var AgeTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific age target range with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/bb671720(v=msads.100).aspx AgeTargetBid Data Object
     * 
     * @uses AgeRange
     * @used-by AgeTarget
     */
    final class AgeTargetBid
    {
        /**
         * The age range to target.
         * @var AgeRange
         */
        public $Age;

        /**
         * The percent amount used to adjust the base bid.
         * @var integer
         */
        public $BidAdjustment;
    }

    /**
     * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
     * @link http://msdn.microsoft.com/en-us/library/bb671467(v=msads.100).aspx ApiFaultDetail Data Object
     * 
     * @uses BatchError
     * @uses OperationError
     */
    final class ApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of batch errors that identifies the items in the batch of items in the request message that caused the operation to fail.
         * @var BatchError[]
         */
        public $BatchErrors;

        /**
         * An array of operation errors that contains the reasons that explain why the service operation failed when the error is not related to a specific item in the batch of items.
         * @var OperationError[]
         */
        public $OperationErrors;
    }

    /**
     * Defines an app ad extension that can be included in a text ad.
     * @link http://msdn.microsoft.com/en-us/library/dn817898(v=msads.100).aspx AppAdExtension Data Object
     * 
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class AppAdExtension extends AdExtension
    {
        public $AppPlatform;
        public $AppStoreId;
        public $DestinationUrl;
        public $DevicePreference;
        public $DisplayText;
        public $FinalAppUrls;
        public $FinalMobileUrls;
        public $FinalUrls;
        public $TrackingUrlTemplate;
        public $UrlCustomParameters;
    }

    /**
     * Defines an app install ad.
     * @link http://msdn.microsoft.com/en-us/library/mt712576(v=msads.100).aspx AppInstallAd Data Object
     */
    final class AppInstallAd extends Ad
    {
        public $AppPlatform;
        public $AppStoreId;
        public $Text;
        public $Title;
    }

    /**
     * Defines the base object of a conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759548(v=msads.100).aspx ConversionGoal Data Object
     * 
     * @uses ConversionGoalCountType
     * @uses ConversionGoalRevenue
     * @uses EntityScope
     * @uses ConversionGoalStatus
     * @uses ConversionGoalTrackingStatus
     * @uses ConversionGoalType
     * @used-by AddConversionGoalsRequest
     * @used-by GetConversionGoalsByIdsResponse
     * @used-by GetConversionGoalsByTagIdsResponse
     * @used-by UpdateConversionGoalsRequest
     */
    class ConversionGoal
    {
        /**
         * The conversion window is the length of time in minutes after a click that you want to track conversions.
         * @var integer
         */
        public $ConversionWindowInMinutes;

        /**
         * This determines how your conversions are recorded within your chosen conversion window.
         * @var ConversionGoalCountType
         */
        public $CountType;

        /**
         * The unique Bing Ads identifier for the conversion goal.
         * @var integer
         */
        public $Id;

        /**
         * The conversion goal name.
         * @var string
         */
        public $Name;

        /**
         * Determines how much each conversion is worth to your business.
         * @var ConversionGoalRevenue
         */
        public $Revenue;

        /**
         * Determines if the goal applies to all accounts or only the account specified in the required CustomerAccountId header element.
         * @var EntityScope
         */
        public $Scope;

        /**
         * Defines the possible user-determined status values of a conversion goal.
         * @var ConversionGoalStatus
         */
        public $Status;

        /**
         * The unique Bing Ads identifier of the UET tag that you added to your website to allow Bing Ads to collect actions people take on your website.
         * @var integer
         */
        public $TagId;

        /**
         * Defines the possible system-determined status values of a conversion goal.
         * @var ConversionGoalTrackingStatus
         */
        public $TrackingStatus;

        /**
         * The type of the conversion goal.
         * @var ConversionGoalType
         */
        public $Type;
    }

    /**
     * Defines an app install conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759547(v=msads.100).aspx AppInstallGoal Data Object
     */
    final class AppInstallGoal extends ConversionGoal
    {
        public $AppPlatform;
        public $AppStoreId;
    }

    /**
     * Defines the operating system platform and URL of the app store download webpage.
     * @link http://msdn.microsoft.com/en-us/library/mt179359(v=msads.100).aspx AppUrl Data Object
     * 
     * @used-by Ad
     * @used-by AppAdExtension
     * @used-by BiddableAdGroupCriterion
     * @used-by ImageAdExtension
     * @used-by Keyword
     * @used-by SiteLink
     * @used-by Sitelink2AdExtension
     */
    final class AppUrl
    {
        public $OsType;
        public $Url;
    }

    /**
     * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
     * @link http://msdn.microsoft.com/en-us/library/bb671765(v=msads.100).aspx BatchError Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @used-by ApiFaultDetail
     * @used-by BatchErrorCollection
     * @used-by EditorialApiFaultDetail
     * @used-by AddAdGroupRemarketingListAssociationsResponse
     * @used-by AddAdGroupsResponse
     * @used-by AddAdsResponse
     * @used-by AddBudgetsResponse
     * @used-by AddCampaignsResponse
     * @used-by AddConversionGoalsResponse
     * @used-by AddKeywordsResponse
     * @used-by AddListItemsToSharedListResponse
     * @used-by AddRemarketingListsResponse
     * @used-by AddSharedEntityResponse
     * @used-by AddUetTagsResponse
     * @used-by AppealEditorialRejectionsResponse
     * @used-by ApplyProductPartitionActionsResponse
     * @used-by DeleteAdGroupCriterionsResponse
     * @used-by DeleteAdGroupRemarketingListAssociationsResponse
     * @used-by DeleteAdGroupsResponse
     * @used-by DeleteAdsResponse
     * @used-by DeleteBudgetsResponse
     * @used-by DeleteCampaignCriterionsResponse
     * @used-by DeleteCampaignsResponse
     * @used-by DeleteKeywordsResponse
     * @used-by DeleteListItemsFromSharedListResponse
     * @used-by DeleteMediaResponse
     * @used-by DeleteRemarketingListsResponse
     * @used-by DeleteSharedEntitiesResponse
     * @used-by DeleteSharedEntityAssociationsResponse
     * @used-by GetAdExtensionsAssociationsResponse
     * @used-by GetAdGroupRemarketingListAssociationsResponse
     * @used-by GetAdGroupsByIdsResponse
     * @used-by GetAdsByIdsResponse
     * @used-by GetBudgetsByIdsResponse
     * @used-by GetCampaignCriterionsByIdsResponse
     * @used-by GetCampaignIdsByBudgetIdsResponse
     * @used-by GetCampaignsByIdsResponse
     * @used-by GetConversionGoalsByIdsResponse
     * @used-by GetConversionGoalsByTagIdsResponse
     * @used-by GetEditorialReasonsByIdsResponse
     * @used-by GetKeywordsByIdsResponse
     * @used-by GetMediaAssociationsResponse
     * @used-by GetMediaMetaDataByIdsResponse
     * @used-by GetNegativeKeywordsByEntityIdsResponse
     * @used-by GetNegativeSitesByAdGroupIdsResponse
     * @used-by GetNegativeSitesByCampaignIdsResponse
     * @used-by GetRemarketingListsResponse
     * @used-by GetSharedEntityAssociationsByEntityIdsResponse
     * @used-by GetSharedEntityAssociationsBySharedEntityIdsResponse
     * @used-by GetTargetsByAdGroupIdsResponse
     * @used-by GetTargetsByCampaignIdsResponse
     * @used-by GetUetTagsByIdsResponse
     * @used-by SetAdExtensionsAssociationsResponse
     * @used-by SetNegativeSitesToAdGroupsResponse
     * @used-by SetNegativeSitesToCampaignsResponse
     * @used-by SetSharedEntityAssociationsResponse
     * @used-by UpdateAdGroupRemarketingListAssociationsResponse
     * @used-by UpdateAdGroupsResponse
     * @used-by UpdateAdsResponse
     * @used-by UpdateBudgetsResponse
     * @used-by UpdateCampaignsResponse
     * @used-by UpdateConversionGoalsResponse
     * @used-by UpdateKeywordsResponse
     * @used-by UpdateRemarketingListsResponse
     * @used-by UpdateSharedEntitiesResponse
     * @used-by UpdateUetTagsResponse
     */
    class BatchError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the batch error.
         * @var string
         */
        public $Details;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * The name of the data object's element where the error occurred.
         * @var string
         */
        public $FieldPath;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The zero-based index of the item in the batch of items in the request message that failed.
         * @var integer
         */
        public $Index;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;

        /**
         * Reserved for internal use.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines an error object that contains batch error details for the top level list index and a list of batch errors corresponding to the nested list index.
     * @link http://msdn.microsoft.com/en-us/library/dn743731(v=msads.100).aspx BatchErrorCollection Data Object
     * 
     * @uses BatchError
     * @uses KeyValuePairOfstringstring
     * @used-by AddAdGroupCriterionsResponse
     * @used-by AddCampaignCriterionsResponse
     * @used-by AddNegativeKeywordsToEntitiesResponse
     * @used-by DeleteNegativeKeywordsFromEntitiesResponse
     * @used-by UpdateAdGroupCriterionsResponse
     * @used-by UpdateCampaignCriterionsResponse
     */
    final class BatchErrorCollection
    {
        /**
         * A list of batch errors corresponding to the nested list index.
         * @var BatchError[]
         */
        public $BatchErrors;

        /**
         * A numeric error code that identifies the error for the top level list index.
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the batch error for the top level list index.
         * @var string
         */
        public $Details;

        /**
         * A symbolic string constant that identifies the error for the top level list index.
         * @var string
         */
        public $ErrorCode;

        /**
         * Reserved for future use.
         * @var string
         */
        public $FieldPath;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The zero-based top level list index in the request message that failed.
         * @var integer
         */
        public $Index;

        /**
         * A message that describes the error for the top level list index.
         * @var string
         */
        public $Message;

        /**
         * Reserved for internal use.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines a bid.
     * @link http://msdn.microsoft.com/en-us/library/dd797130(v=msads.100).aspx Bid Data Object
     * 
     * @used-by AdGroup
     * @used-by FixedBid
     * @used-by Keyword
     * @used-by MaxClicksBiddingScheme
     * @used-by MaxConversionsBiddingScheme
     * @used-by SitePlacement
     * @used-by TargetCpaBiddingScheme
     */
    final class Bid
    {
        /**
         * The bid value.
         * @var double
         */
        public $Amount;
    }

    /**
     * Defines a biddable criterion that you want applied to the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/jj689538(v=msads.100).aspx BiddableAdGroupCriterion Data Object
     * 
     * @uses CriterionBid
     * @uses AdGroupCriterionEditorialStatus
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class BiddableAdGroupCriterion extends AdGroupCriterion
    {
        /**
         * The bid to use in the auction.
         * @var CriterionBid
         */
        public $CriterionBid;

        /**
         * The URL of the webpage that the user is taken to when they click the ad.
         * @var string
         */
        public $DestinationUrl;

        /**
         * The criterion's editorial review status.
         * @var AdGroupCriterionEditorialStatus
         */
        public $EditorialStatus;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * The mobile landing page URL.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * The landing page URL.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * Tracking templates are where you can specify URL tracking parameters that are used in tandem with your final URL or landing page.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

    /**
     * Defines the base object of a bidding scheme for how you want to manage your bids.
     * @link http://msdn.microsoft.com/en-us/library/mt709087(v=msads.100).aspx BiddingScheme Data Object
     * 
     * @used-by AdGroup
     * @used-by Campaign
     * @used-by Keyword
     */
    class BiddingScheme
    {
        public $Type;
    }

    /**
     * Defines a Bing Merchant Center store.
     * @link http://msdn.microsoft.com/en-us/library/dn411606(v=msads.100).aspx BMCStore Data Object
     * 
     * @used-by GetBMCStoresByCustomerIdResponse
     */
    final class BMCStore
    {
        public $HasCatalog;
        public $Id;
        public $IsActive;
        public $IsProductAdsEnabled;
        public $Name;
    }

    /**
     * Represents a budget that can be shared by any campaigns in an account.
     * @link http://msdn.microsoft.com/en-us/library/mt750548(v=msads.100).aspx Budget Data Object
     * 
     * @uses BudgetLimitType
     * @used-by AddBudgetsRequest
     * @used-by GetBudgetsByIdsResponse
     * @used-by UpdateBudgetsRequest
     */
    final class Budget
    {
        public $Amount;
        public $AssociationCount;
        public $BudgetType;
        public $Id;
        public $Name;
    }

    /**
     * Defines an object that specifies a click-to-call phone number to include in a text ad.
     * @link http://msdn.microsoft.com/en-us/library/jj721598(v=msads.100).aspx CallAdExtension Data Object
     */
    final class CallAdExtension extends AdExtension
    {
        /**
         * The country code where the phone number is registered.
         * @var string
         */
        public $CountryCode;

        /**
         * This element determines whether the preference is for the click to call phone number to be displayed on mobile devices or all devices.
         * @var integer
         */
        public $DevicePreference;

        /**
         * A Boolean value that determines whether the phone number is the only clickable item in the ad.
         * @var boolean
         */
        public $IsCallOnly;

        /**
         * A Boolean value that determines whether call tracking is enabled for the call ad extension.
         * @var boolean
         */
        public $IsCallTrackingEnabled;

        /**
         * The phone number to include in the ad.
         * @var string
         */
        public $PhoneNumber;

        /**
         * A Boolean value that determines whether a toll-free tracking number should be created for call tracking.
         * @var boolean
         */
        public $RequireTollFreeTrackingNumber;
    }

    /**
     * Defines an object that specifies additional text about your business, products, or services to include in a text ad.
     * @link http://msdn.microsoft.com/en-us/library/mt691508(v=msads.100).aspx CalloutAdExtension Data Object
     */
    final class CalloutAdExtension extends AdExtension
    {
        /**
         * Additional callout text about your business, products, or services to include in a text ad.
         * @var string
         */
        public $Text;
    }

    /**
     * Defines a campaign.
     * @link http://msdn.microsoft.com/en-us/library/bb672054(v=msads.100).aspx Campaign Data Object
     * 
     * @uses BiddingScheme
     * @uses BudgetLimitType
     * @uses KeyValuePairOfstringstring
     * @uses CampaignStatus
     * @uses CustomParameters
     * @uses CampaignType
     * @uses Setting
     * @used-by AddCampaignsRequest
     * @used-by GetCampaignsByAccountIdResponse
     * @used-by GetCampaignsByIdsResponse
     * @used-by UpdateCampaignsRequest
     */
    final class Campaign
    {
        /**
         * The bid strategy type for how you want to manage your bids.
         * @var BiddingScheme
         */
        public $BiddingScheme;

        /**
         * The budget type determines whether the campaign uses a daily budget or a monthly budget, and how the budget is spent.
         * @var BudgetLimitType
         */
        public $BudgetType;

        /**
         * The amount to spend daily on the campaign.
         * @var double
         */
        public $DailyBudget;

        /**
         * Determines whether daylight-saving time is enabled.
         * @var boolean
         */
        public $DaylightSaving;

        /**
         * The description of the campaign.
         * @var string
         */
        public $Description;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Bing Ads identifier of the campaign.
         * @var integer
         */
        public $Id;

        /**
         * The monthly budget of the campaign.
         * @var double
         */
        public $MonthlyBudget;

        /**
         * The name of the campaign.
         * @var string
         */
        public $Name;

        /**
         * The percent amount by which to adjust your bid for native ads above or below the base ad group or keyword bid.
         * @var integer
         */
        public $NativeBidAdjustment;

        /**
         * The status of the campaign.
         * @var CampaignStatus
         */
        public $Status;

        /**
         * The time zone where the campaign operates.
         * @var string
         */
        public $TimeZone;

        /**
         * The tracking template to use as a default for all URLs in your campaign.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;

        /**
         * The campaign type determines whether the campaign is a Bing Shopping campaign or a Search &amp; Content campaign.
         * @var CampaignType
         */
        public $CampaignType;

        /**
         * The setting will vary by campaign type.
         * @var Setting[]
         */
        public $Settings;

        /**
         * The unique Bing Ads identifier of the Budget that this campaign shares with other campaigns in the account.
         * @var integer
         */
        public $BudgetId;
        public $Languages;
    }

    /**
     * Defines a criterion that you want applied to the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn913126(v=msads.100).aspx CampaignCriterion Data Object
     * 
     * @uses Criterion
     * @uses KeyValuePairOfstringstring
     * @used-by AddCampaignCriterionsRequest
     * @used-by GetCampaignCriterionsByIdsResponse
     * @used-by UpdateCampaignCriterionsRequest
     */
    class CampaignCriterion
    {
        /**
         * Reserved for future use.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * The identifier of the campaign to apply the criterion to.
         * @var integer
         */
        public $CampaignId;

        /**
         * The criterion to apply to the campaign.
         * @var Criterion
         */
        public $Criterion;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Bing Ads identifier for the campaign criterion.
         * @var integer
         */
        public $Id;

        /**
         * The type of campaign criterion.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines an object that contains the negative site URLs of a campaign.
     * @link http://msdn.microsoft.com/en-us/library/hh299890(v=msads.100).aspx CampaignNegativeSites Data Object
     * 
     * @used-by GetNegativeSitesByCampaignIdsResponse
     * @used-by SetNegativeSitesToCampaignsRequest
     */
    final class CampaignNegativeSites
    {
        /**
         * The identifier of the campaign to which the negative site URLs belong.
         * @var integer
         */
        public $CampaignId;

        /**
         * A list of URLs of the websites on which you do not want your ads displayed.
         * @var string[]
         */
        public $NegativeSites;
    }

    final class CampaignSize
    {
        public $CampaignId;
        public $Size;
    }

    /**
     * Defines a list of cities to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/dd796959(v=msads.100).aspx CityTarget Data Object
     * 
     * @uses CityTargetBid
     * @used-by LocationTarget
     */
    final class CityTarget
    {
        /**
         * An array of cities to target with bid adjustments.
         * @var CityTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific city target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/dd796932(v=msads.100).aspx CityTargetBid Data Object
     * 
     * @used-by CityTarget
     */
    final class CityTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted city.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * The city to target.
         * @var string
         */
        public $City;

        /**
         * Set this element to true if you want to exclude the location from targeting.
         * @var boolean
         */
        public $IsExcluded;
    }

    /**
     * Defines properties for revenue that can be tracked by a conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759545(v=msads.100).aspx ConversionGoalRevenue Data Object
     * 
     * @uses ConversionGoalRevenueType
     * @used-by ConversionGoal
     */
    final class ConversionGoalRevenue
    {
        /**
         * The revenue currency.
         * @var string
         */
        public $CurrencyCode;

        /**
         * Determines how revenue is tracked.
         * @var ConversionGoalRevenueType
         */
        public $Type;

        /**
         * The revenue value or amount.
         * @var float
         */
        public $Value;
    }

    /**
     * Defines a list of countries or regions to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/bb671605(v=msads.100).aspx CountryTarget Data Object
     * 
     * @uses CountryTargetBid
     * @used-by LocationTarget
     */
    final class CountryTarget
    {
        /**
         * An array of countries or regions to target with bid adjustments.
         * @var CountryTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific country or region target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/bb671882(v=msads.100).aspx CountryTargetBid Data Object
     * 
     * @used-by CountryTarget
     */
    final class CountryTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted country/region.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * The country to target.
         * @var string
         */
        public $CountryAndRegion;

        /**
         * Set this element to true if you want to exclude the location from targeting.
         * @var boolean
         */
        public $IsExcluded;
    }

    /**
     * Defines the base object of a criterion.
     * @link http://msdn.microsoft.com/en-us/library/jj738613(v=msads.100).aspx Criterion Data Object
     * 
     * @used-by AdGroupCriterion
     * @used-by CampaignCriterion
     */
    class Criterion
    {
        /**
         * The type of criterion.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines a base class for criterion bids.
     * @link http://msdn.microsoft.com/en-us/library/jj689540(v=msads.100).aspx CriterionBid Data Object
     * 
     * @used-by BiddableAdGroupCriterion
     */
    class CriterionBid
    {
        /**
         * The type of criterion bid.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines the base object of a remarketing rule.
     * @link http://msdn.microsoft.com/en-us/library/mt772357(v=msads.100).aspx RemarketingRule Data Object
     * 
     * @used-by RemarketingList
     */
    class RemarketingRule
    {
        public $Type;
    }

    /**
     * Defines a custom events remarketing rule.
     * @link http://msdn.microsoft.com/en-us/library/mt772354(v=msads.100).aspx CustomEventsRule Data Object
     * 
     * @uses StringOperator
     * @uses NumberOperator
     */
    final class CustomEventsRule extends RemarketingRule
    {
        public $Action;
        public $ActionOperator;
        public $Category;
        public $CategoryOperator;
        public $Label;
        public $LabelOperator;
        public $Value;
        public $ValueOperator;
    }

    /**
     * Defines a key and value custom parameter for URL tracking.
     * @link http://msdn.microsoft.com/en-us/library/mt179360(v=msads.100).aspx CustomParameter Data Object
     * 
     * @used-by CustomParameters
     */
    final class CustomParameter
    {
        /**
         * The name of the custom parameter that you want to track.
         * @var string
         */
        public $Key;

        /**
         * The value to track using your custom parameter.
         * @var string
         */
        public $Value;
    }

    /**
     * Defines a collection of key and value custom parameters for URL tracking.
     * @link http://msdn.microsoft.com/en-us/library/mt179361(v=msads.100).aspx CustomParameters Data Object
     * 
     * @uses CustomParameter
     * @used-by Ad
     * @used-by AdGroup
     * @used-by AppAdExtension
     * @used-by BiddableAdGroupCriterion
     * @used-by Campaign
     * @used-by ImageAdExtension
     * @used-by Keyword
     * @used-by SiteLink
     * @used-by Sitelink2AdExtension
     */
    final class CustomParameters
    {
        /**
         * The collection of key and value custom parameters for URL tracking.
         * @var CustomParameter[]
         */
        public $Parameters;
    }

    /**
     * Represents a date.
     * @link http://msdn.microsoft.com/en-us/library/bb671903(v=msads.100).aspx Date Data Object
     * 
     * @used-by AdGroup
     * @used-by Schedule
     */
    final class Date
    {
        /**
         * Specifies the day of the month.
         * @var integer
         */
        public $Day;

        /**
         * Specifies the month.
         * @var integer
         */
        public $Month;

        /**
         * Specifies the year.
         * @var integer
         */
        public $Year;
    }

    /**
     * Defines a day of the week and time range for ad extension scheduling.
     * @link http://msdn.microsoft.com/en-us/library/mt763245(v=msads.100).aspx DayTime Data Object
     * 
     * @uses Day
     * @uses Minute
     * @used-by Schedule
     */
    final class DayTime
    {
        /**
         * The scheduled day of week.
         * @var Day
         */
        public $Day;

        /**
         * The scheduled end hour.
         * @var integer
         */
        public $EndHour;

        /**
         * The scheduled end minute.
         * @var Minute
         */
        public $EndMinute;

        /**
         * The scheduled start hour.
         * @var integer
         */
        public $StartHour;

        /**
         * The scheduled start minute.
         * @var Minute
         */
        public $StartMinute;
    }

    /**
     * Defines a list of days of the week and time range to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/dn743766(v=msads.100).aspx DayTimeTarget Data Object
     * 
     * @uses DayTimeTargetBid
     * @used-by Target
     */
    final class DayTimeTarget
    {
        /**
         * An array of DayTimeTargetBid objects that each specify the day of the week and time to target with bid adjustment to apply to the base bid.
         * @var DayTimeTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific day of the week and time range to target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/dn743741(v=msads.100).aspx DayTimeTargetBid Data Object
     * 
     * @uses Day
     * @uses Minute
     * @used-by DayTimeTarget
     */
    final class DayTimeTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid for the specified day and time range.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * The day of the week to target.
         * @var Day
         */
        public $Day;

        /**
         * The starting hour range to target.
         * @var integer
         */
        public $FromHour;

        /**
         * The starting minute of the hour to target.
         * @var Minute
         */
        public $FromMinute;

        /**
         * The ending hour range to target.
         * @var integer
         */
        public $ToHour;

        /**
         * The ending minute of the hour to target.
         * @var Minute
         */
        public $ToMinute;
    }

    /**
     * Defines a list of devices to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/hh527704(v=msads.100).aspx DeviceOSTarget Data Object
     * 
     * @uses DeviceOSTargetBid
     * @used-by Target
     */
    final class DeviceOSTarget
    {
        /**
         * An array of devices to target with bid adjustments.
         * @var DeviceOSTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific device target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/dn249988(v=msads.100).aspx DeviceOSTargetBid Data Object
     * 
     * @used-by DeviceOSTarget
     */
    final class DeviceOSTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid for the specified device target.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * The name of the device to target.
         * @var string
         */
        public $DeviceName;

        /**
         * Reserved for internal use.
         * @var string[]
         */
        public $OSNames;
    }

    /**
     * Defines dimension information for media on a website.
     * @link http://msdn.microsoft.com/en-us/library/dd796881(v=msads.100).aspx Dimension Data Object
     * 
     * @used-by MediaType
     */
    final class Dimension
    {
        /**
         * The height.
         * @var integer
         */
        public $Height;

        /**
         * The width.
         * @var integer
         */
        public $Width;
    }

    /**
     * Defines a duration conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759546(v=msads.100).aspx DurationGoal Data Object
     */
    final class DurationGoal extends ConversionGoal
    {
        /**
         * The minimum amount of time in seconds that the user must spend on your website to track as a conversion.
         * @var integer
         */
        public $MinimumDurationInSeconds;
    }

    /**
     * Defines an dynamic search ad that is generated automatically based on the website domain and language that you want to target.
     * @link http://msdn.microsoft.com/en-us/library/mt772355(v=msads.100).aspx DynamicSearchAd Data Object
     */
    final class DynamicSearchAd extends Ad
    {
        public $Path1;
        public $Path2;
        public $Text;
    }

    /**
     * Defines the base class of a setting.
     * @link http://msdn.microsoft.com/en-us/library/dn913122(v=msads.100).aspx Setting Data Object
     * 
     * @used-by AdGroup
     * @used-by Campaign
     */
    class Setting
    {
        /**
         * The type of setting.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines the campaign level settings for a Dynamic Search Ads campaign.
     * @link http://msdn.microsoft.com/en-us/library/mt772353(v=msads.100).aspx DynamicSearchAdsSetting Data Object
     */
    final class DynamicSearchAdsSetting extends Setting
    {
        public $DomainName;
        public $Language;
    }

    /**
     * Defines a fault object that operations such as AddAdGroupCriterions, UpdateAdGroupCriterions, SetAdExtensionsAssociations, and UpdateAdExtensions return when one or more criterion or ad extensions in your request message fail editorial review.
     * @link http://msdn.microsoft.com/en-us/library/cc197200(v=msads.100).aspx EditorialApiFaultDetail Data Object
     * 
     * @uses BatchError
     * @uses EditorialError
     * @uses OperationError
     */
    final class EditorialApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of batch errors that identifies the items in the batch of items in the request message that caused the operation to fail.
         * @var BatchError[]
         */
        public $BatchErrors;

        /**
         * An array of editorial errors that contains the details that explain why the criterion or ad extension was disapproved.
         * @var EditorialError[]
         */
        public $EditorialErrors;

        /**
         * An array of operation errors that contains the details that explain why the service operation failed when the error is not related to a specific item in the batch of items.
         * @var OperationError[]
         */
        public $OperationErrors;
    }

    /**
     * Defines an error object that identifies the entity with the batch of entities that failed editorial review.
     * @link http://msdn.microsoft.com/en-us/library/cc197190(v=msads.100).aspx EditorialError Data Object
     * 
     * @used-by EditorialApiFaultDetail
     */
    final class EditorialError extends BatchError
    {
        /**
         * Reserved for future use.
         * @var boolean
         */
        public $Appealable;

        /**
         * The text that caused the entity to be disapproved.
         * @var string
         */
        public $DisapprovedText;

        /**
         * The element or property of the entity that caused the entity to be disapproved.
         * @var string
         */
        public $Location;

        /**
         * The corresponding country or region for the flagged editorial issue.
         * @var string
         */
        public $PublisherCountry;

        /**
         * A numeric code that identifies the error.
         * @var integer
         */
        public $ReasonCode;
    }

    /**
     * Defines an object that you can use to determine the component of an ad or keyword that failed editorial review, and the reason for the failure.
     * @link http://msdn.microsoft.com/en-us/library/ff728493(v=msads.100).aspx EditorialReason Data Object
     * 
     * @used-by EditorialReasonCollection
     */
    final class EditorialReason
    {
        /**
         * The component of the ad or keyword that failed editorial review.
         * @var string
         */
        public $Location;

        /**
         * A list of countries where the ad or keyword failed editorial review.
         * @var string[]
         */
        public $PublisherCountries;

        /**
         * A code that identifies the reason for the failure.
         * @var integer
         */
        public $ReasonCode;

        /**
         * The term that failed editorial review.
         * @var string
         */
        public $Term;
    }

    /**
     * Defines a collection of ads or keywords that failed editorial review, and the reason for the failure.
     * @link http://msdn.microsoft.com/en-us/library/ff728504(v=msads.100).aspx EditorialReasonCollection Data Object
     * 
     * @uses AppealStatus
     * @uses EditorialReason
     * @used-by GetEditorialReasonsByIdsResponse
     */
    final class EditorialReasonCollection
    {
        /**
         * Identifies the ad group which is the parent of the ad or keyword that failed editorial review.
         * @var integer
         */
        public $AdGroupId;

        /**
         * Identifies the ad or keyword that failed editorial review.
         * @var integer
         */
        public $AdOrKeywordId;

        /**
         * A value that determines whether you can appeal the issues found by the editorial review.
         * @var AppealStatus
         */
        public $AppealStatus;

        /**
         * An array of editorial reasons that you can use to determine the component of an ad or keyword that failed editorial review, and the reason for the failure.
         * @var EditorialReason[]
         */
        public $Reasons;
    }

    /**
     * Defines an object that represents the enhanced CPC bid strategy type.
     * @link http://msdn.microsoft.com/en-us/library/mt709089(v=msads.100).aspx EnhancedCpcBiddingScheme Data Object
     */
    final class EnhancedCpcBiddingScheme extends BiddingScheme
    {
    }

    /**
     * Defines an object that contains the unique system identifier of an entity such as ad or keyword, and the identifier of its parent.
     * @link http://msdn.microsoft.com/en-us/library/mt179358(v=msads.100).aspx EntityIdToParentIdAssociation Data Object
     * 
     * @used-by AppealEditorialRejectionsRequest
     * @used-by GetEditorialReasonsByIdsRequest
     */
    final class EntityIdToParentIdAssociation
    {
        /**
         * The system-generated unique identifier of an entity such as ad or keyword.
         * @var integer
         */
        public $EntityId;

        /**
         * The identifier of the entity's parent.
         * @var integer
         */
        public $ParentId;
    }

    /**
     * Defines an object that contains a set of negative keywords that are only associated with the corresponding entity such as a campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743733(v=msads.100).aspx EntityNegativeKeyword Data Object
     * 
     * @uses NegativeKeyword
     * @used-by AddNegativeKeywordsToEntitiesRequest
     * @used-by DeleteNegativeKeywordsFromEntitiesRequest
     * @used-by GetNegativeKeywordsByEntityIdsResponse
     */
    final class EntityNegativeKeyword
    {
        /**
         * The system-generated identifier of a campaign or ad group that is associated with the negative keywords.
         * @var integer
         */
        public $EntityId;

        /**
         * The type of entity such as a campaign that is associated with the negative keywords.
         * @var string
         */
        public $EntityType;

        /**
         * An array of negative keywords that are associated with the corresponding campaign or ad group.
         * @var NegativeKeyword[]
         */
        public $NegativeKeywords;
    }

    /**
     * Defines a custom event conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759550(v=msads.100).aspx EventGoal Data Object
     * 
     * @uses ExpressionOperator
     * @uses ValueOperator
     */
    final class EventGoal extends ConversionGoal
    {
        /**
         * The type of user interaction you want to track.
         * @var string
         */
        public $ActionExpression;

        /**
         * The operator that can be applied to the value of the ActionExpression element.
         * @var ExpressionOperator
         */
        public $ActionOperator;

        /**
         * The category of event you want to track.
         * @var string
         */
        public $CategoryExpression;

        /**
         * The operator that can be applied to the value of the CategoryExpression element.
         * @var ExpressionOperator
         */
        public $CategoryOperator;

        /**
         * The name of the element that caused the action.
         * @var string
         */
        public $LabelExpression;

        /**
         * The operator that can be applied to the value of the LabelExpression element.
         * @var ExpressionOperator
         */
        public $LabelOperator;

        /**
         * A numerical value associated with that event.
         * @var float
         */
        public $Value;

        /**
         * The operator that can be applied to the value of the Value element.
         * @var ValueOperator
         */
        public $ValueOperator;
    }

    /**
     * Defines an expanded text ad.
     * @link http://msdn.microsoft.com/en-us/library/mt750599(v=msads.100).aspx ExpandedTextAd Data Object
     */
    final class ExpandedTextAd extends Ad
    {
        public $DisplayUrl;
        public $Path1;
        public $Path2;
        public $Text;
        public $TitlePart1;
        public $TitlePart2;
    }

    /**
     * Defines the monetary bid to use in the auction.
     * @link http://msdn.microsoft.com/en-us/library/jj689541(v=msads.100).aspx FixedBid Data Object
     * 
     * @uses Bid
     */
    final class FixedBid extends CriterionBid
    {
        /**
         * The amount to bid in the auction.
         * @var Bid
         */
        public $Bid;
    }

    /**
     * Defines a list of genders to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/bb671655(v=msads.100).aspx GenderTarget Data Object
     * 
     * @uses GenderTargetBid
     * @used-by Target
     */
    final class GenderTarget
    {
        /**
         * An array of genders to target with bid adjustments.
         * @var GenderTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific gender target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/bb671554(v=msads.100).aspx GenderTargetBid Data Object
     * 
     * @uses GenderType
     * @used-by GenderTarget
     */
    final class GenderTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * The gender to target.
         * @var GenderType
         */
        public $Gender;
    }

    /**
     * Defines an object that contains the longitude and latitude coordinates of a geographical location.
     * @link http://msdn.microsoft.com/en-us/library/jj721599(v=msads.100).aspx GeoPoint Data Object
     * 
     * @used-by LocationAdExtension
     */
    final class GeoPoint
    {
        /**
         * The latitude specified in micro degrees.
         * @var integer
         */
        public $LatitudeInMicroDegrees;

        /**
         * The longitude specified in micro degrees.
         * @var integer
         */
        public $LongitudeInMicroDegrees;
    }

    /**
     * Defines an object that contains a list of identifiers, for example negative keyword identifiers.
     * @link http://msdn.microsoft.com/en-us/library/dn743736(v=msads.100).aspx IdCollection Data Object
     * 
     * @used-by AddNegativeKeywordsToEntitiesResponse
     * @used-by GetCampaignIdsByBudgetIdsResponse
     */
    final class IdCollection
    {
        /**
         * A list of identifiers, for example negative keyword identifiers.
         * @var integer[]
         */
        public $Ids;
    }

    /**
     * Defines the base object of media.
     * @link http://msdn.microsoft.com/en-us/library/dn195580(v=msads.100).aspx Media Data Object
     * 
     * @used-by AddMediaRequest
     * @used-by GetMediaByIdsResponse
     */
    class Media
    {
        /**
         * The unique Bing Ads identifier of the media.
         * @var integer
         */
        public $Id;

        /**
         * The media type.
         * @var string
         */
        public $MediaType;

        /**
         * The type of media to add to the media library.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines an image object that can be added to an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn195581(v=msads.100).aspx Image Data Object
     */
    final class Image extends Media
    {
        /**
         * A base64 string that represents the image or icon to add to the library.
         * @var string
         */
        public $Data;
    }

    /**
     * Defines an ad extension that specifies an image with alternative text to include in a text ad.
     * @link http://msdn.microsoft.com/en-us/library/dn766199(v=msads.100).aspx ImageAdExtension Data Object
     * 
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class ImageAdExtension extends AdExtension
    {
        /**
         * Alternative description of the image media for usability.
         * @var string
         */
        public $AlternativeText;

        /**
         * Description that can be used by the advertiser, agency, or account manager to track, label, or manage image media.
         * @var string
         */
        public $Description;

        /**
         * The URL of the webpage to take the user to when they click the image.
         * @var string
         */
        public $DestinationUrl;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * Reserved for future use.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * Reserved for future use.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The identifiers of the images to include in the ad.
         * @var integer[]
         */
        public $ImageMediaIds;

        /**
         * Reserved for future use.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Reserved for future use.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

    /**
     * Defines a media representation base class that includes a media download Url.
     * @link http://msdn.microsoft.com/en-us/library/dn766194(v=msads.100).aspx MediaRepresentation Data Object
     * 
     * @used-by MediaMetaData
     */
    class MediaRepresentation
    {
        /**
         * The name of the media representation.
         * @var string
         */
        public $Name;

        /**
         * The type of the media representation.
         * @var string
         */
        public $Type;

        /**
         * The media download URL.
         * @var string
         */
        public $Url;
    }

    /**
     * Defines an image media representation with height and width.
     * @link http://msdn.microsoft.com/en-us/library/dn766197(v=msads.100).aspx ImageMediaRepresentation Data Object
     */
    final class ImageMediaRepresentation extends MediaRepresentation
    {
        /**
         * The height of the image in pixels.
         * @var integer
         */
        public $Height;

        /**
         * The width of the image in pixels.
         * @var integer
         */
        public $Width;
    }

    /**
     * Defines the minimum and maximum impressions per day for a website.
     * @link http://msdn.microsoft.com/en-us/library/dd796854(v=msads.100).aspx ImpressionsPerDayRange Data Object
     * 
     * @used-by PlacementDetail
     */
    final class ImpressionsPerDayRange
    {
        /**
         * The maximum number of impressions per day for the website.
         * @var integer
         */
        public $Maximum;

        /**
         * The minimum number of impressions per day for the website.
         * @var integer
         */
        public $Minimum;
    }

    /**
     * Defines an object that represents the inherit from parent bid strategy type.
     * @link http://msdn.microsoft.com/en-us/library/mt709092(v=msads.100).aspx InheritFromParentBiddingScheme Data Object
     */
    final class InheritFromParentBiddingScheme extends BiddingScheme
    {
    }

    final class KeyValuePairOfstringstring
    {
        public $key;
        public $value;
    }

    /**
     * Defines a keyword.
     * @link http://msdn.microsoft.com/en-us/library/bb671833(v=msads.100).aspx Keyword Data Object
     * 
     * @uses Bid
     * @uses BiddingScheme
     * @uses KeywordEditorialStatus
     * @uses AppUrl
     * @uses KeyValuePairOfstringstring
     * @uses MatchType
     * @uses KeywordStatus
     * @uses CustomParameters
     * @used-by AddKeywordsRequest
     * @used-by GetKeywordsByAdGroupIdResponse
     * @used-by GetKeywordsByEditorialStatusResponse
     * @used-by GetKeywordsByIdsResponse
     * @used-by UpdateKeywordsRequest
     */
    final class Keyword
    {
        /**
         * The bid to use when the user's search term and the keyword match.
         * @var Bid
         */
        public $Bid;

        /**
         * The bid strategy type for how you want to manage your bids.
         * @var BiddingScheme
         */
        public $BiddingScheme;

        /**
         * The URL of the webpage to take the user to when they click the ad.
         * @var string
         */
        public $DestinationUrl;

        /**
         * The editorial review status of the keyword, which indicates whether the keyword is pending review, has been approved, or has been disapproved.
         * @var KeywordEditorialStatus
         */
        public $EditorialStatus;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * The mobile landing page URL.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * The landing page URL.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The system-generated identifier of the keyword.
         * @var integer
         */
        public $Id;

        /**
         * The type of match to compare the keyword and the user's search term.
         * @var MatchType
         */
        public $MatchType;

        /**
         * The string to use as the substitution value in an ad if the ad's title, text, display URL, or destination URL contains the {Param1} dynamic substitution string.
         * @var string
         */
        public $Param1;

        /**
         * The string to use as the substitution value in an ad if the title, text, display URL, or destination URL contains the {Param2} dynamic substitution string.
         * @var string
         */
        public $Param2;

        /**
         * The string to use as the substitution value in an ad if the title, text, display URL, or destination URL contains the {Param3} dynamic substitution string.
         * @var string
         */
        public $Param3;

        /**
         * The keyword's status.
         * @var KeywordStatus
         */
        public $Status;

        /**
         * The keyword text.
         * @var string
         */
        public $Text;

        /**
         * The tracking template to use as a default for all FinalUrls and FinalMobileUrls.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

    /**
     * Defines an ad extension that specifies a business' address and phone number to include in a text ad.
     * @link http://msdn.microsoft.com/en-us/library/jj721600(v=msads.100).aspx LocationAdExtension Data Object
     * 
     * @uses Address
     * @uses BusinessGeoCodeStatus
     * @uses GeoPoint
     */
    final class LocationAdExtension extends AdExtension
    {
        /**
         * The business' address.
         * @var Address
         */
        public $Address;

        /**
         * The name of the business.
         * @var string
         */
        public $CompanyName;

        /**
         * A status value that indicates whether the business' latitude and longitude coordinates have been determined.
         * @var BusinessGeoCodeStatus
         */
        public $GeoCodeStatus;

        /**
         * The latitude and longitude coordinates of the specified Address element.
         * @var GeoPoint
         */
        public $GeoPoint;

        /**
         * The identifier of an icon used to mark the business' location on Bing Maps.
         * @var integer
         */
        public $IconMediaId;

        /**
         * The identifier of the image to include in the ad.
         * @var integer
         */
        public $ImageMediaId;

        /**
         * The business' phone number to include in the ad.
         * @var string
         */
        public $PhoneNumber;
    }

    /**
     * Defines an object that can contain different types of geographical targets, for example lists of city and state targets.
     * @link http://msdn.microsoft.com/en-us/library/bb671646(v=msads.100).aspx LocationTarget Data Object
     * 
     * @uses CityTarget
     * @uses CountryTarget
     * @uses IntentOption
     * @uses MetroAreaTarget
     * @uses PostalCodeTarget
     * @uses RadiusTarget
     * @uses StateTarget
     * @used-by Target
     */
    final class LocationTarget
    {
        public $CityTarget;
        public $CountryTarget;
        public $IntentOption;
        public $MetroAreaTarget;
        public $PostalCodeTarget;
        public $RadiusTarget;
        public $StateTarget;
    }

    /**
     * Defines an object that represents the manual CPC bid strategy type.
     * @link http://msdn.microsoft.com/en-us/library/mt709088(v=msads.100).aspx ManualCpcBiddingScheme Data Object
     */
    final class ManualCpcBiddingScheme extends BiddingScheme
    {
    }

    /**
     * Defines an object that represents the maximum clicks bid strategy type.
     * @link http://msdn.microsoft.com/en-us/library/mt709091(v=msads.100).aspx MaxClicksBiddingScheme Data Object
     * 
     * @uses Bid
     */
    final class MaxClicksBiddingScheme extends BiddingScheme
    {
        public $MaxCpc;
    }

    /**
     * Defines an object that represents the maximum conversions bid strategy type.
     * @link http://msdn.microsoft.com/en-us/library/mt709090(v=msads.100).aspx MaxConversionsBiddingScheme Data Object
     * 
     * @uses Bid
     */
    final class MaxConversionsBiddingScheme extends BiddingScheme
    {
        public $MaxCpc;
        public $StartingBid;
    }

    /**
     * Defines an object that represents the identified media and an associated entity, for example media associated with an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn798358(v=msads.100).aspx MediaAssociation Data Object
     * 
     * @uses MediaEnabledEntityFilter
     * @used-by GetMediaAssociationsResponse
     */
    final class MediaAssociation
    {
        /**
         * The system identifier of the media enabled entity, for example the identifier of an ImageAdExtension.
         * @var integer
         */
        public $EntityId;

        /**
         * Determines the type of media to get.
         * @var MediaEnabledEntityFilter
         */
        public $MediaEnabledEntity;

        /**
         * The system identifier of the media.
         * @var integer
         */
        public $MediaId;
    }

    /**
     * Defines a media meta data object.
     * @link http://msdn.microsoft.com/en-us/library/dn766198(v=msads.100).aspx MediaMetaData Data Object
     * 
     * @uses MediaRepresentation
     * @used-by GetMediaMetaDataByAccountIdResponse
     * @used-by GetMediaMetaDataByIdsResponse
     */
    final class MediaMetaData
    {
        /**
         * The system identifier of the media meta data.
         * @var integer
         */
        public $Id;

        /**
         * The name of the media subclass.
         * @var string
         */
        public $MediaType;

        /**
         * An array of MediaRepresentation-derived objects, for example ImageMediaRepresentation, that each include download Urls for one or more media representations.
         * @var MediaRepresentation[]
         */
        public $Representations;

        /**
         * The type of media in the library.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines media type information for a website.
     * @link http://msdn.microsoft.com/en-us/library/dd797128(v=msads.100).aspx MediaType Data Object
     * 
     * @uses Dimension
     * @used-by PlacementDetail
     */
    final class MediaType
    {
        /**
         * The media dimensions.
         * @var Dimension[]
         */
        public $Dimensions;

        /**
         * The name of the media type.
         * @var string
         */
        public $Name;
    }

    /**
     * Defines a list of metro area targets with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/bb671815(v=msads.100).aspx MetroAreaTarget Data Object
     * 
     * @uses MetroAreaTargetBid
     * @used-by LocationTarget
     */
    final class MetroAreaTarget
    {
        /**
         * An array of MetroAreaTargetBid objects that specifies the metropolitan areas to target and the incremental bid percentages to apply to the base bid.
         * @var MetroAreaTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a metropolitan area to target and the percentage used to adjust the base bid.
     * @link http://msdn.microsoft.com/en-us/library/bb672080(v=msads.100).aspx MetroAreaTargetBid Data Object
     * 
     * @used-by MetroAreaTarget
     */
    final class MetroAreaTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted metropolitan area.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * Set this element to true if you want to exclude the location from targeting.
         * @var boolean
         */
        public $IsExcluded;

        /**
         * The metropolitan area to target.
         * @var string
         */
        public $MetroArea;
    }

    /**
     * Defines an object that contains the migration type and status for an account.
     * @link http://msdn.microsoft.com/en-us/library/mt706126(v=msads.100).aspx MigrationStatusInfo Data Object
     * 
     * @uses MigrationStatus
     * @used-by AccountMigrationStatusesInfo
     */
    final class MigrationStatusInfo
    {
        /**
         * The migration type.
         * @var string
         */
        public $MigrationType;

        /**
         * The date and time when the migration began.
         * @var \DateTime
         */
        public $StartTimeInUtc;

        /**
         * The migration status.
         * @var MigrationStatus
         */
        public $Status;
    }

    /**
     * Defines a criterion that you want to exclude from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn913133(v=msads.100).aspx NegativeAdGroupCriterion Data Object
     */
    final class NegativeAdGroupCriterion extends AdGroupCriterion
    {
    }

    /**
     * Defines a criterion that you want to exclude from the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn913130(v=msads.100).aspx NegativeCampaignCriterion Data Object
     */
    final class NegativeCampaignCriterion extends CampaignCriterion
    {
    }

    /**
     * Defines the base class of a shared list item.
     * @link http://msdn.microsoft.com/en-us/library/dn743738(v=msads.100).aspx SharedListItem Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @used-by AddListItemsToSharedListRequest
     * @used-by AddSharedEntityRequest
     * @used-by GetListItemsBySharedListResponse
     */
    class SharedListItem
    {
        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The type of the shared list item.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines a negative keyword with match type.
     * @link http://msdn.microsoft.com/en-us/library/dn743739(v=msads.100).aspx NegativeKeyword Data Object
     * 
     * @uses MatchType
     * @used-by EntityNegativeKeyword
     */
    final class NegativeKeyword extends SharedListItem
    {
        public $Id;
        public $MatchType;
        public $Text;
    }

    /**
     * Defines the base class of a shared entity.
     * @link http://msdn.microsoft.com/en-us/library/dn743735(v=msads.100).aspx SharedEntity Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @used-by AddSharedEntityRequest
     * @used-by DeleteSharedEntitiesRequest
     * @used-by GetSharedEntitiesByAccountIdResponse
     * @used-by UpdateSharedEntitiesRequest
     */
    class SharedEntity
    {
        /**
         * The number of active associations between this object and an entity such as a campaign.
         * @var integer
         */
        public $AssociationCount;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The unique Bing Ads identifier of the shared entity.
         * @var integer
         */
        public $Id;

        /**
         * The name of the shared entity.
         * @var string
         */
        public $Name;

        /**
         * The type of the shared entity.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines the base class of a shared list.
     * @link http://msdn.microsoft.com/en-us/library/dn743734(v=msads.100).aspx SharedList Data Object
     * 
     * @used-by AddListItemsToSharedListRequest
     * @used-by DeleteListItemsFromSharedListRequest
     * @used-by GetListItemsBySharedListRequest
     */
    class SharedList extends SharedEntity
    {
        /**
         * The number of SharedListItem objects that are added to this shared list.
         * @var integer
         */
        public $ItemCount;
    }

    /**
     * Defines a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743737(v=msads.100).aspx NegativeKeywordList Data Object
     */
    final class NegativeKeywordList extends SharedList
    {
    }

    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/bb671973(v=msads.100).aspx OperationError Data Object
     * 
     * @used-by ApiFaultDetail
     * @used-by EditorialApiFaultDetail
     */
    final class OperationError
    {
        /**
         * A numeric error code that identifies the error
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the error.
         * @var string
         */
        public $Details;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

    /**
     * Defines a pages viewed per visit conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759551(v=msads.100).aspx PagesViewedPerVisitGoal Data Object
     */
    final class PagesViewedPerVisitGoal extends ConversionGoal
    {
        /**
         * The minimum number of pages the user must visit, in order to count as a conversion.
         * @var integer
         */
        public $MinimumPagesViewed;
    }

    /**
     * Defines a page visitors remarketing rule.
     * @link http://msdn.microsoft.com/en-us/library/mt772358(v=msads.100).aspx PageVisitorsRule Data Object
     * 
     * @uses RuleItemGroup
     */
    final class PageVisitorsRule extends RemarketingRule
    {
        public $RuleItemGroups;
    }

    /**
     * Defines a page visitors who did not visit another page remarketing rule.
     * @link http://msdn.microsoft.com/en-us/library/mt772356(v=msads.100).aspx PageVisitorsWhoDidNotVisitAnotherPageRule Data Object
     * 
     * @uses RuleItemGroup
     */
    final class PageVisitorsWhoDidNotVisitAnotherPageRule extends RemarketingRule
    {
        public $ExcludeRuleItemGroups;
        public $IncludeRuleItemGroups;
    }

    /**
     * Defines a page visitors who visited another page remarketing rule.
     * @link http://msdn.microsoft.com/en-us/library/mt772361(v=msads.100).aspx PageVisitorsWhoVisitedAnotherPageRule Data Object
     * 
     * @uses RuleItemGroup
     */
    final class PageVisitorsWhoVisitedAnotherPageRule extends RemarketingRule
    {
        public $AnotherRuleItemGroups;
        public $RuleItemGroups;
    }

    /**
     * Defines the size and type of media that the publisher website supports for ad placements.
     * @link http://msdn.microsoft.com/en-us/library/dd796936(v=msads.100).aspx PlacementDetail Data Object
     * 
     * @uses ImpressionsPerDayRange
     * @uses MediaType
     * @used-by GetPlacementDetailsForUrlsResponse
     */
    final class PlacementDetail
    {
        /**
         * Not supported.
         * @var ImpressionsPerDayRange
         */
        public $ImpressionsRangePerDay;

        /**
         * The URL of the publisher's website.
         * @var string
         */
        public $PathName;

        /**
         * The identifier of the publisher.
         * @var integer
         */
        public $PlacementId;

        /**
         * An array of MediaType objects that contains the size and type of media that the publisher website supports.
         * @var MediaType[]
         */
        public $SupportedMediaTypes;
    }

    /**
     * Defines a list of postal code targets with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/dn743743(v=msads.100).aspx PostalCodeTarget Data Object
     * 
     * @uses PostalCodeTargetBid
     * @used-by LocationTarget
     */
    final class PostalCodeTarget
    {
        public $Bids;
    }

    /**
     * Defines a specific postal code target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/dn743767(v=msads.100).aspx PostalCodeTargetBid Data Object
     * 
     * @used-by PostalCodeTarget
     */
    final class PostalCodeTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted postal code area.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * Set this element to true if you want to exclude the location from targeting.
         * @var boolean
         */
        public $IsExcluded;

        /**
         * The postal code to target.
         * @var string
         */
        public $PostalCode;
    }

    /**
     * Defines a product ad.
     * @link http://msdn.microsoft.com/en-us/library/jj738612(v=msads.100).aspx ProductAd Data Object
     */
    final class ProductAd extends Ad
    {
        /**
         * The promotional text to display in a product ad.
         * @var string
         */
        public $PromotionalText;
    }

    /**
     * Defines a condition that determines whether a product is selected from a customer's Bing Merchant Center catalog file.
     * @link http://msdn.microsoft.com/en-us/library/jj721705(v=msads.100).aspx ProductCondition Data Object
     * 
     * @used-by ProductPartition
     * @used-by ProductScope
     */
    final class ProductCondition
    {
        /**
         * The condition's attribute value.
         * @var string
         */
        public $Attribute;

        /**
         * The condition's operand.
         * @var string
         */
        public $Operand;
    }

    /**
     * Defines an ad group level product partition with one condition that helps determine whether a product from the Bing Merchant Center store gets served as a product ad.
     * @link http://msdn.microsoft.com/en-us/library/dn913123(v=msads.100).aspx ProductPartition Data Object
     * 
     * @uses ProductCondition
     * @uses ProductPartitionType
     */
    final class ProductPartition extends Criterion
    {
        public $Condition;
        public $ParentCriterionId;
        public $PartitionType;
    }

    /**
     * Defines a campaign level product scope with list of conditions that help determine whether a product from the Bing Merchant Center store gets served as a product ad.
     * @link http://msdn.microsoft.com/en-us/library/dn913124(v=msads.100).aspx ProductScope Data Object
     * 
     * @uses ProductCondition
     */
    final class ProductScope extends Criterion
    {
        public $Conditions;
    }

    /**
     * Defines a list of geographical radius targets with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/dd796953(v=msads.100).aspx RadiusTarget Data Object
     * 
     * @uses RadiusTargetBid
     * @used-by LocationTarget
     */
    final class RadiusTarget
    {
        /**
         * An array of RadiusTargetBid objects that specifies an area surrounding a geographical location to target and the incremental bid percentages to apply to the base bid.
         * @var RadiusTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific geographical radius target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/dd796863(v=msads.100).aspx RadiusTargetBid Data Object
     * 
     * @uses DistanceUnit
     * @used-by RadiusTarget
     */
    final class RadiusTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted geographical location radius.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * Reserved for future use.
         * @var integer
         */
        public $Id;

        /**
         * Reserved for future use.
         * @var boolean
         */
        public $IsExcluded;

        /**
         * The latitude, in degrees, of the target location.
         * @var double
         */
        public $LatitudeDegrees;

        /**
         * The longitude, in degrees, of the target location.
         * @var double
         */
        public $LongitudeDegrees;

        /**
         * The name of the geographical location being targeted.
         * @var string
         */
        public $Name;

        /**
         * The radius that specifies the area surrounding the geographical location to target.
         * @var double
         */
        public $Radius;

        /**
         * The unit of measurement for the specified radius, for example kilometers or miles.
         * @var DistanceUnit
         */
        public $RadiusUnit;
    }

    /**
     * Defines a remarketing list that can be associated with an ad group.
     * @link http://msdn.microsoft.com/en-us/library/mt735047(v=msads.100).aspx RemarketingList Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @uses RemarketingRule
     * @uses EntityScope
     * @used-by AddRemarketingListsRequest
     * @used-by GetRemarketingListsResponse
     * @used-by UpdateRemarketingListsRequest
     */
    final class RemarketingList
    {
        /**
         * The description of the remarketing list.
         * @var string
         */
        public $Description;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The Bing Ads identifier of the remarketing list.
         * @var integer
         */
        public $Id;

        /**
         * When you create a remarketing list, you can specify how far back in time Bing Ads should look for actions that match your remarketing list definition in order to add people to your list.
         * @var integer
         */
        public $MembershipDuration;

        /**
         * The name of the remarketing list.
         * @var string
         */
        public $Name;

        /**
         * The Bing Ads identifier of the account or customer.
         * @var integer
         */
        public $ParentId;

        /**
         * You can choose four types of rules so you can target different audiences.
         * @var RemarketingRule
         */
        public $Rule;

        /**
         * Scope defines what accounts can use this remarketing list.
         * @var EntityScope
         */
        public $Scope;

        /**
         * The Bing Ads identifier of the Universal Event Tracking (UET) tag that is used with the remarketing list.
         * @var integer
         */
        public $TagId;
    }

    /**
     * Defines an object that specifies third-party reviews (exact or paraphrased) about your business, products, or services to include in a text ad.
     * @link http://msdn.microsoft.com/en-us/library/mt691509(v=msads.100).aspx ReviewAdExtension Data Object
     */
    final class ReviewAdExtension extends AdExtension
    {
        /**
         * Determines whether the review text is an exact quote or paraphrased.
         * @var boolean
         */
        public $IsExact;

        /**
         * The review source name.
         * @var string
         */
        public $Source;

        /**
         * The text that is either a paraphrase or an exact quote from the review source.
         * @var string
         */
        public $Text;

        /**
         * The review source Url.
         * @var string
         */
        public $Url;
    }

    /**
     * Defines the base class of a remarketing list rule item.
     * @link http://msdn.microsoft.com/en-us/library/mt772359(v=msads.100).aspx RuleItem Data Object
     * 
     * @used-by RuleItemGroup
     */
    class RuleItem
    {
        public $Type;
    }

    /**
     * Defines an object that contains a list of remarketing list rule items.
     * @link http://msdn.microsoft.com/en-us/library/mt772360(v=msads.100).aspx RuleItemGroup Data Object
     * 
     * @uses RuleItem
     * @used-by PageVisitorsRule
     * @used-by PageVisitorsWhoDidNotVisitAnotherPageRule
     * @used-by PageVisitorsWhoVisitedAnotherPageRule
     */
    final class RuleItemGroup
    {
        public $Items;
    }

    /**
     * Defines the start and end date ranges for ad extension scheduling.
     * @link http://msdn.microsoft.com/en-us/library/mt763244(v=msads.100).aspx Schedule Data Object
     * 
     * @uses DayTime
     * @uses Date
     * @used-by AdExtension
     * @used-by SiteLink
     */
    final class Schedule
    {
        /**
         * The list of day and time ranges.
         * @var DayTime[]
         */
        public $DayTimeRanges;

        /**
         * The scheduled end date.
         * @var Date
         */
        public $EndDate;

        /**
         * The scheduled start date.
         * @var Date
         */
        public $StartDate;

        /**
         * Determines whether to use the account time zone or the time zone of the search user where the ads could be delivered.
         * @var boolean
         */
        public $UseSearcherTimeZone;
    }

    /**
     * Defines an object that contains association information for a campaign and shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743769(v=msads.100).aspx SharedEntityAssociation Data Object
     * 
     * @used-by DeleteSharedEntityAssociationsRequest
     * @used-by GetSharedEntityAssociationsByEntityIdsResponse
     * @used-by GetSharedEntityAssociationsBySharedEntityIdsResponse
     * @used-by SetSharedEntityAssociationsRequest
     */
    final class SharedEntityAssociation
    {
        /**
         * The system-generated identifier of the campaign that is associated with the shared entity.
         * @var integer
         */
        public $EntityId;

        /**
         * The type of entity.
         * @var string
         */
        public $EntityType;

        /**
         * The system-generated identifier of the shared entity.
         * @var integer
         */
        public $SharedEntityId;

        /**
         * The type of the shared entity.
         * @var string
         */
        public $SharedEntityType;
    }

    /**
     * Defines the campaign level settings for a Bing Shopping Campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn913132(v=msads.100).aspx ShoppingSetting Data Object
     */
    final class ShoppingSetting extends Setting
    {
        /**
         * Helps determine which Bing Shopping campaign serves ads, in the event that two or more campaigns use the product catalog feed from the same Bing Merchant Center store.
         * @var integer
         */
        public $Priority;

        /**
         * The country code for the Bing Merchant Center store.
         * @var string
         */
        public $SalesCountryCode;

        /**
         * The unique identifier for the Bing Merchant Center store that your product catalog feed belongs to.
         * @var integer
         */
        public $StoreId;
    }

    /**
     * Defines a site link to include in an ad.
     * @link http://msdn.microsoft.com/en-us/library/jj134381(v=msads.100).aspx SiteLink Data Object
     * 
     * @uses AppUrl
     * @uses Schedule
     * @uses CustomParameters
     * @used-by SiteLinksAdExtension
     */
    final class SiteLink
    {
        public $Description1;
        public $Description2;
        public $DestinationUrl;
        public $DevicePreference;
        public $DisplayText;
        public $FinalAppUrls;
        public $FinalMobileUrls;
        public $FinalUrls;
        public $Scheduling;
        public $TrackingUrlTemplate;
        public $UrlCustomParameters;
    }

    /**
     * Defines an object with one sitelink per ad extension.
     * @link http://msdn.microsoft.com/en-us/library/mt767903(v=msads.100).aspx Sitelink2AdExtension Data Object
     * 
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class Sitelink2AdExtension extends AdExtension
    {
        public $Description1;
        public $Description2;
        public $DestinationUrl;
        public $DevicePreference;
        public $DisplayText;
        public $FinalAppUrls;
        public $FinalMobileUrls;
        public $FinalUrls;
        public $TrackingUrlTemplate;
        public $UrlCustomParameters;
    }

    /**
     * Defines an object with multiple sitelinks per ad extension.
     * @link http://msdn.microsoft.com/en-us/library/jj134387(v=msads.100).aspx SiteLinksAdExtension Data Object
     * 
     * @uses SiteLink
     */
    final class SiteLinksAdExtension extends AdExtension
    {
        public $SiteLinks;
    }

    /**
     * Defines a website placement bid.
     * @link http://msdn.microsoft.com/en-us/library/dd797248(v=msads.100).aspx SitePlacement Data Object
     * 
     * @uses Bid
     * @uses SitePlacementStatus
     * @used-by AddSitePlacementsRequest
     * @used-by GetSitePlacementsByAdGroupIdResponse
     * @used-by GetSitePlacementsByIdsResponse
     * @used-by UpdateSitePlacementsRequest
     */
    final class SitePlacement
    {
        public $Bid;
        public $Id;
        public $PlacementId;
        public $Status;
        public $Url;
    }

    /**
     * Defines a list of state targets with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/dd796793(v=msads.100).aspx StateTarget Data Object
     * 
     * @uses StateTargetBid
     * @used-by LocationTarget
     */
    final class StateTarget
    {
        /**
         * An array of StateTargetBid objects that specifies the states/provinces/territories to target and the incremental bid percentages to apply to the base bid.
         * @var StateTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a sub geography, specifically a state or province to target, and the percentage used to adjust the base bid.
     * @link http://msdn.microsoft.com/en-us/library/dd796942(v=msads.100).aspx StateTargetBid Data Object
     * 
     * @used-by StateTarget
     */
    final class StateTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted sub geography.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * Set this element to true if you want to exclude the location from targeting.
         * @var boolean
         */
        public $IsExcluded;

        /**
         * The sub geography to target.
         * @var string
         */
        public $State;
    }

    /**
     * Defines a rule expression where the operator and value both contain string data types.
     * @link http://msdn.microsoft.com/en-us/library/mt772363(v=msads.100).aspx StringRuleItem Data Object
     * 
     * @uses StringOperator
     */
    final class StringRuleItem extends RuleItem
    {
        public $Operand;
        public $Operator;
        public $Value;
    }

    /**
     * Defines an object that pairs one header with between 3 and 10 snippet values that tell customers more about your business.
     * @link http://msdn.microsoft.com/en-us/library/mt734391(v=msads.100).aspx StructuredSnippetAdExtension Data Object
     */
    final class StructuredSnippetAdExtension extends AdExtension
    {
        /**
         * The header that is appended with a colon ( :) and precedes the snippet values.
         * @var string
         */
        public $Header;

        /**
         * The snippet values that follow after the Header: component.
         * @var string[]
         */
        public $Values;
    }

    /**
     * Defines the types of targeting that you can use to target your ads to users.
     * @link http://msdn.microsoft.com/en-us/library/bb671789(v=msads.100).aspx Target Data Object
     * 
     * @uses AgeTarget
     * @uses DayTimeTarget
     * @uses DeviceOSTarget
     * @uses KeyValuePairOfstringstring
     * @uses GenderTarget
     * @uses LocationTarget
     * @used-by AddTargetsToLibraryRequest
     * @used-by GetTargetsByAdGroupIdsResponse
     * @used-by GetTargetsByCampaignIdsResponse
     * @used-by GetTargetsByIdsResponse
     * @used-by UpdateTargetsInLibraryRequest
     */
    final class Target
    {
        public $Age;
        public $DayTime;
        public $DeviceOS;
        public $ForwardCompatibilityMap;
        public $Gender;
        public $Id;
        public $IsLibraryTarget;
        public $Location;
        public $Name;
    }

    /**
     * Defines an object that represents the target CPA bid strategy type.
     * @link http://msdn.microsoft.com/en-us/library/mt709094(v=msads.100).aspx TargetCpaBiddingScheme Data Object
     * 
     * @uses Bid
     */
    final class TargetCpaBiddingScheme extends BiddingScheme
    {
        public $MaxCpc;
        public $StartingBid;
        public $TargetCpa;
    }

    /**
     * Defines information about a target in your library.
     * @link http://msdn.microsoft.com/en-us/library/dd796878(v=msads.100).aspx TargetInfo Data Object
     * 
     * @used-by GetTargetsInfoFromLibraryResponse
     */
    final class TargetInfo
    {
        /**
         * The identifier of the target.
         * @var integer
         */
        public $Id;

        /**
         * The name of the target.
         * @var string
         */
        public $Name;
    }

    /**
     * Defines a text ad.
     * @link http://msdn.microsoft.com/en-us/library/bb672081(v=msads.100).aspx TextAd Data Object
     */
    final class TextAd extends Ad
    {
        public $DestinationUrl;
        public $DisplayUrl;
        public $Text;
        public $Title;
    }

    /**
     * Defines a Universal Event Tracking (UET) tag that you can add to your website to allow Bing Ads to collect actions people take on your website.
     * @link http://msdn.microsoft.com/en-us/library/mt759552(v=msads.100).aspx UetTag Data Object
     * 
     * @uses UetTagTrackingStatus
     * @used-by AddUetTagsRequest
     * @used-by AddUetTagsResponse
     * @used-by GetUetTagsByIdsResponse
     * @used-by UpdateUetTagsRequest
     */
    final class UetTag
    {
        /**
         * Text to help you identify the UET tag.
         * @var string
         */
        public $Description;

        /**
         * The unique Bing Ads identifier of the UET tag.
         * @var integer
         */
        public $Id;

        /**
         * The UET tag name.
         * @var string
         */
        public $Name;

        /**
         * If your website doesn't support JavaScript, you can use this Non-JavaScript representation of the UET tag.
         * @var string
         */
        public $TrackingNoScript;

        /**
         * The tracking script that you can add to your website to allow Bing Ads to collect actions people take on your website.
         * @var string
         */
        public $TrackingScript;

        /**
         * The system-determined status values of a UET tag, for example the system sets the status to Unverified if the UET tag has not yet been verified.
         * @var UetTagTrackingStatus
         */
        public $TrackingStatus;
    }

    /**
     * Defines a URL conversion goal.
     * @link http://msdn.microsoft.com/en-us/library/mt759549(v=msads.100).aspx UrlGoal Data Object
     * 
     * @uses ExpressionOperator
     */
    final class UrlGoal extends ConversionGoal
    {
        /**
         * The expression used to determine the page or pages the user has to visit in order to count as a conversion.
         * @var string
         */
        public $UrlExpression;

        /**
         * The operator that can be applied to the value of the Url element.
         * @var ExpressionOperator
         */
        public $UrlOperator;
    }

    /**
     * Defines a webpage parameter that contains a list of webpage conditions or criteria that help determine whether you want to show dynamic search ads.
     * @link http://msdn.microsoft.com/en-us/library/mt772362(v=msads.100).aspx Webpage Data Object
     * 
     * @uses WebpageParameter
     */
    final class Webpage extends Criterion
    {
        public $Parameter;
    }

    /**
     * Defines a condition or criterion that helps determine whether you want to show dynamic search ads.
     * @link http://msdn.microsoft.com/en-us/library/mt772364(v=msads.100).aspx WebpageCondition Data Object
     * 
     * @uses WebpageConditionOperand
     * @used-by WebpageParameter
     */
    final class WebpageCondition
    {
        public $Argument;
        public $Operand;
    }

    /**
     * Defines the conditions or criteria that determine whether you want to show dynamic search ads.
     * @link http://msdn.microsoft.com/en-us/library/mt772367(v=msads.100).aspx WebpageParameter Data Object
     * 
     * @uses WebpageCondition
     * @used-by Webpage
     */
    final class WebpageParameter
    {
        public $Conditions;
        public $CriterionName;
    }

    /**
     * Adds one or more ad extensions to an account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn236319(v=msads.100).aspx AddAdExtensions Request Object
     * 
     * @uses AdExtension
     * @used-by BingAdsCampaignManagementService::AddAdExtensions
     */
    final class AddAdExtensionsRequest
    {
        /**
         * The identifier of the account to add the extensions to.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of ad extensions of any type to add to the account.
         * @var AdExtension[]
         */
        public $AdExtensions;
    }

    /**
     * Adds one or more ad extensions to an account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn236319(v=msads.100).aspx AddAdExtensions Response Object
     * 
     * @uses AdExtensionIdentity
     * @used-by BingAdsCampaignManagementService::AddAdExtensions
     */
    final class AddAdExtensionsResponse
    {
        /**
         * The identities of the extensions that were added.
         * @var AdExtensionIdentity[]
         */
        public $AdExtensionIdentities;
    }

    /**
     * Adds one or more ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn277499(v=msads.100).aspx AddAdGroupCriterions Request Object
     * 
     * @uses AdGroupCriterion
     * @uses CriterionType
     * @used-by BingAdsCampaignManagementService::AddAdGroupCriterions
     */
    final class AddAdGroupCriterionsRequest
    {
        /**
         * The identifier of the account to add the criterions to.
         * @var integer
         */
        public $AccountId;

        /**
         * A list of ad group criterions.
         * @var AdGroupCriterion[]
         */
        public $AdGroupCriterions;

        /**
         * The type of ad group criterion to add, for example Webpage.
         * @var CriterionType
         */
        public $CriterionType;
    }

    /**
     * Adds one or more ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn277499(v=msads.100).aspx AddAdGroupCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::AddAdGroupCriterions
     */
    final class AddAdGroupCriterionsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the criterion that were added.
         * @var integer[]
         */
        public $AdGroupCriterionIds;

        /**
         * An array of BatchErrorCollection objects that contain details for any criterion that were not successfully added.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }

    /**
     * Associates the specified ad groups with the respective remarketing lists.
     * @link http://msdn.microsoft.com/en-us/library/mt735048(v=msads.100).aspx AddAdGroupRemarketingListAssociations Request Object
     * 
     * @uses AdGroupRemarketingListAssociation
     * @used-by BingAdsCampaignManagementService::AddAdGroupRemarketingListAssociations
     */
    final class AddAdGroupRemarketingListAssociationsRequest
    {
        /**
         * The list of up to 1,000 ad group remarketing list associations that you want to add.
         * @var AdGroupRemarketingListAssociation[]
         */
        public $AdGroupRemarketingListAssociations;
    }

    /**
     * Associates the specified ad groups with the respective remarketing lists.
     * @link http://msdn.microsoft.com/en-us/library/mt735048(v=msads.100).aspx AddAdGroupRemarketingListAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAdGroupRemarketingListAssociations
     */
    final class AddAdGroupRemarketingListAssociationsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the ad group remarketing list associations that were added.
         * @var integer[]
         */
        public $AssociationIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Adds new ad groups to a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277502(v=msads.100).aspx AddAdGroups Request Object
     * 
     * @uses AdGroup
     * @used-by BingAdsCampaignManagementService::AddAdGroups
     */
    final class AddAdGroupsRequest
    {
        /**
         * The identifier of the campaign to add the ad groups to.
         * @var integer
         */
        public $CampaignId;

        /**
         * An array of AdGroup objects to add to the specified campaign.
         * @var AdGroup[]
         */
        public $AdGroups;
    }

    /**
     * Adds new ad groups to a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277502(v=msads.100).aspx AddAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAdGroups
     */
    final class AddAdGroupsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the ad groups that were added.
         * @var integer[]
         */
        public $AdGroupIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Adds one or more ads to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277506(v=msads.100).aspx AddAds Request Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::AddAds
     */
    final class AddAdsRequest
    {
        /**
         * The identifier of the ad group to add the ads to.
         * @var integer
         */
        public $AdGroupId;

        /**
         * An array of ads to add to the specified ad group.
         * @var Ad[]
         */
        public $Ads;
    }

    /**
     * Adds one or more ads to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277506(v=msads.100).aspx AddAds Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAds
     */
    final class AddAdsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the ads that were added.
         * @var integer[]
         */
        public $AdIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Adds new budgets to the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750546(v=msads.100).aspx AddBudgets Request Object
     * 
     * @uses Budget
     * @used-by BingAdsCampaignManagementService::AddBudgets
     */
    final class AddBudgetsRequest
    {
        /**
         * An array of Budget objects to add to the account's shared budget library.
         * @var Budget[]
         */
        public $Budgets;
    }

    /**
     * Adds new budgets to the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750546(v=msads.100).aspx AddBudgets Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddBudgets
     */
    final class AddBudgetsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the budgets that were added.
         * @var integer[]
         */
        public $BudgetIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Adds one or more campaign criterions that help determine whether ads in each campaign get served.
     * @link http://msdn.microsoft.com/en-us/library/dn913127(v=msads.100).aspx AddCampaignCriterions Request Object
     * 
     * @uses CampaignCriterion
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::AddCampaignCriterions
     */
    final class AddCampaignCriterionsRequest
    {
        /**
         * A list of criterions that help determine whether ads in each campaign get served.
         * @var CampaignCriterion[]
         */
        public $CampaignCriterions;

        /**
         * The type of campaign criterion to add, for example ProductScope or Webpage.
         * @var CampaignCriterionType
         */
        public $CriterionType;
    }

    /**
     * Adds one or more campaign criterions that help determine whether ads in each campaign get served.
     * @link http://msdn.microsoft.com/en-us/library/dn913127(v=msads.100).aspx AddCampaignCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::AddCampaignCriterions
     */
    final class AddCampaignCriterionsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the criterion that were added.
         * @var integer[]
         */
        public $CampaignCriterionIds;

        /**
         * An array of BatchErrorCollection objects that contain details for any criterion that were not successfully added.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }

    /**
     * Adds one or more campaigns to the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn277510(v=msads.100).aspx AddCampaigns Request Object
     * 
     * @uses Campaign
     * @used-by BingAdsCampaignManagementService::AddCampaigns
     */
    final class AddCampaignsRequest
    {
        /**
         * The identifier of the account to add the campaigns to.
         * @var integer
         */
        public $AccountId;

        /**
         * An array of Campaign objects to add to the specified account.
         * @var Campaign[]
         */
        public $Campaigns;
    }

    /**
     * Adds one or more campaigns to the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn277510(v=msads.100).aspx AddCampaigns Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddCampaigns
     */
    final class AddCampaignsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the campaigns that were added.
         * @var integer[]
         */
        public $CampaignIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Adds new conversion goals to the account's shared conversion goal library.
     * @link http://msdn.microsoft.com/en-us/library/mt759539(v=msads.100).aspx AddConversionGoals Request Object
     * 
     * @uses ConversionGoal
     * @used-by BingAdsCampaignManagementService::AddConversionGoals
     */
    final class AddConversionGoalsRequest
    {
        /**
         * An array of ConversionGoal objects to add to the account's shared conversion goal library.
         * @var ConversionGoal[]
         */
        public $ConversionGoals;
    }

    /**
     * Adds new conversion goals to the account's shared conversion goal library.
     * @link http://msdn.microsoft.com/en-us/library/mt759539(v=msads.100).aspx AddConversionGoals Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddConversionGoals
     */
    final class AddConversionGoalsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the conversion goals that were added.
         * @var integer[]
         */
        public $ConversionGoalIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Adds one or more keywords to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277513(v=msads.100).aspx AddKeywords Request Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::AddKeywords
     */
    final class AddKeywordsRequest
    {
        /**
         * The identifier of the ad group to add the keywords to.
         * @var integer
         */
        public $AdGroupId;

        /**
         * An array of Keyword objects to add to the specified ad group.
         * @var Keyword[]
         */
        public $Keywords;
    }

    /**
     * Adds one or more keywords to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277513(v=msads.100).aspx AddKeywords Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddKeywords
     */
    final class AddKeywordsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the keywords that were added.
         * @var integer[]
         */
        public $KeywordIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Adds list items such as negative keywords to the corresponding list.
     * @link http://msdn.microsoft.com/en-us/library/dn743721(v=msads.100).aspx AddListItemsToSharedList Request Object
     * 
     * @uses SharedListItem
     * @uses SharedList
     * @used-by BingAdsCampaignManagementService::AddListItemsToSharedList
     */
    final class AddListItemsToSharedListRequest
    {
        /**
         * An array of list items to add to the shared list, for example a list of negative keywords.
         * @var SharedListItem[]
         */
        public $ListItems;

        /**
         * The list to add to the account's shared library.
         * @var SharedList
         */
        public $SharedList;
    }

    /**
     * Adds list items such as negative keywords to the corresponding list.
     * @link http://msdn.microsoft.com/en-us/library/dn743721(v=msads.100).aspx AddListItemsToSharedList Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddListItemsToSharedList
     */
    final class AddListItemsToSharedListResponse
    {
        /**
         * A list of long values that represents the identifiers for the list items that were added.
         * @var integer[]
         */
        public $ListItemIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Adds the specified media to an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn277518(v=msads.100).aspx AddMedia Request Object
     * 
     * @uses Media
     * @used-by BingAdsCampaignManagementService::AddMedia
     */
    final class AddMediaRequest
    {
        /**
         * The identifier of the account that owns the media library.
         * @var integer
         */
        public $AccountId;

        /**
         * An array of Media to add to the account's media library.
         * @var Media[]
         */
        public $Media;
    }

    /**
     * Adds the specified media to an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn277518(v=msads.100).aspx AddMedia Response Object
     * 
     * @used-by BingAdsCampaignManagementService::AddMedia
     */
    final class AddMediaResponse
    {
        /**
         * The identifiers of the media that you added to the library.
         * @var integer[]
         */
        public $MediaIds;
    }

    /**
     * Adds negative keywords to the specified campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743724(v=msads.100).aspx AddNegativeKeywordsToEntities Request Object
     * 
     * @uses EntityNegativeKeyword
     * @used-by BingAdsCampaignManagementService::AddNegativeKeywordsToEntities
     */
    final class AddNegativeKeywordsToEntitiesRequest
    {
        /**
         * An array of negative keyword with associated entity such as a campaign or ad group.
         * @var EntityNegativeKeyword[]
         */
        public $EntityNegativeKeywords;
    }

    /**
     * Adds negative keywords to the specified campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743724(v=msads.100).aspx AddNegativeKeywordsToEntities Response Object
     * 
     * @uses IdCollection
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::AddNegativeKeywordsToEntities
     */
    final class AddNegativeKeywordsToEntitiesResponse
    {
        /**
         * A list of IdCollection corresponding to the negative keywords that were added for the corresponding entity.
         * @var IdCollection[]
         */
        public $NegativeKeywordIds;

        /**
         * An array of BatchErrorCollection objects that contain details for any negative keyword that were not successfully added.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }

    final class AddRemarketingListsRequest
    {
        public $RemarketingLists;
    }

    final class AddRemarketingListsResponse
    {
        public $RemarketingListIds;
        public $PartialErrors;
    }

    /**
     * Adds a shared entity such as a negative keyword list to the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743722(v=msads.100).aspx AddSharedEntity Request Object
     * 
     * @uses SharedEntity
     * @uses SharedListItem
     * @used-by BingAdsCampaignManagementService::AddSharedEntity
     */
    final class AddSharedEntityRequest
    {
        /**
         * The shared entity to add to the account's shared library, for example a negative keyword list.
         * @var SharedEntity
         */
        public $SharedEntity;

        /**
         * An array of list items to add to the shared list, for example a list of negative keywords.
         * @var SharedListItem[]
         */
        public $ListItems;
    }

    /**
     * Adds a shared entity such as a negative keyword list to the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743722(v=msads.100).aspx AddSharedEntity Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddSharedEntity
     */
    final class AddSharedEntityResponse
    {
        /**
         * A list of long values that represents the identifiers for the list items that were added.
         * @var integer[]
         */
        public $ListItemIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;

        /**
         * The identifier for the shared entity that was added.
         * @var integer
         */
        public $SharedEntityId;
    }

    /**
     * Adds one or more website placement bids to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277523(v=msads.100).aspx AddSitePlacements Request Object
     * 
     * @uses SitePlacement
     * @used-by BingAdsCampaignManagementService::AddSitePlacements
     */
    final class AddSitePlacementsRequest
    {
        /**
         * The identifier of the ad group to add the site placement bids to.
         * @var integer
         */
        public $AdGroupId;

        /**
         * An array of SitePlacement objects that contains the site placement bids to add.
         * @var SitePlacement[]
         */
        public $SitePlacements;
    }

    /**
     * Adds one or more website placement bids to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277523(v=msads.100).aspx AddSitePlacements Response Object
     * 
     * @used-by BingAdsCampaignManagementService::AddSitePlacements
     */
    final class AddSitePlacementsResponse
    {
        /**
         * The identifiers of the website placement bids that were added.
         * @var integer[]
         */
        public $SitePlacementIds;
    }

    /**
     * Adds targets to your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn277526(v=msads.100).aspx AddTargetsToLibrary Request Object
     * 
     * @uses Target
     * @used-by BingAdsCampaignManagementService::AddTargetsToLibrary
     */
    final class AddTargetsToLibraryRequest
    {
        /**
         * An array of Target objects to add to the target library.
         * @var Target[]
         */
        public $Targets;
    }

    /**
     * Adds targets to your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn277526(v=msads.100).aspx AddTargetsToLibrary Response Object
     * 
     * @used-by BingAdsCampaignManagementService::AddTargetsToLibrary
     */
    final class AddTargetsToLibraryResponse
    {
        /**
         * An array of long values that contains the identifiers of the targets that were added to your target library.
         * @var integer[]
         */
        public $TargetIds;
    }

    /**
     * Adds new Universal Event Tracking (UET) tags that you can add to your website to allow Bing Ads to collect actions people take on your website.
     * @link http://msdn.microsoft.com/en-us/library/mt759506(v=msads.100).aspx AddUetTags Request Object
     * 
     * @uses UetTag
     * @used-by BingAdsCampaignManagementService::AddUetTags
     */
    final class AddUetTagsRequest
    {
        /**
         * An array of UetTag objects to add to the customer's shared UET tag library.
         * @var UetTag[]
         */
        public $UetTags;
    }

    /**
     * Adds new Universal Event Tracking (UET) tags that you can add to your website to allow Bing Ads to collect actions people take on your website.
     * @link http://msdn.microsoft.com/en-us/library/mt759506(v=msads.100).aspx AddUetTags Response Object
     * 
     * @uses UetTag
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddUetTags
     */
    final class AddUetTagsResponse
    {
        public $UetTags;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Appeals the editorial rejections of one or more ads or keywords that failed editorial review.
     * @link http://msdn.microsoft.com/en-us/library/dn277533(v=msads.100).aspx AppealEditorialRejections Request Object
     * 
     * @uses EntityIdToParentIdAssociation
     * @uses EntityType
     * @used-by BingAdsCampaignManagementService::AppealEditorialRejections
     */
    final class AppealEditorialRejectionsRequest
    {
        /**
         * A list of unique identifiers of the ads or keywords that failed editorial review.
         * @var EntityIdToParentIdAssociation[]
         */
        public $EntityIdToParentIdAssociations;

        /**
         * The type of entity that the entity to parent list contains.
         * @var EntityType
         */
        public $EntityType;

        /**
         * The justification for the appeal.
         * @var string
         */
        public $JustificationText;
    }

    /**
     * Appeals the editorial rejections of one or more ads or keywords that failed editorial review.
     * @link http://msdn.microsoft.com/en-us/library/dn277533(v=msads.100).aspx AppealEditorialRejections Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AppealEditorialRejections
     */
    final class AppealEditorialRejectionsResponse
    {
        /**
         * An array of BatchError objects that contain details for any appeals that were not successfully submitted.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Applies an add, update, or delete action to each of the specified BiddableAdGroupCriterion or NegativeAdGroupCriterion, which each contain a ProductPartition.
     * @link http://msdn.microsoft.com/en-us/library/dn913134(v=msads.100).aspx ApplyProductPartitionActions Request Object
     * 
     * @uses AdGroupCriterionAction
     * @used-by BingAdsCampaignManagementService::ApplyProductPartitionActions
     */
    final class ApplyProductPartitionActionsRequest
    {
        /**
         * A list of up to 5,000 AdGroupCriterionAction objects that each contain an Action element and either a BiddableAdGroupCriterion or NegativeAdGroupCriterion.
         * @var AdGroupCriterionAction[]
         */
        public $CriterionActions;
    }

    /**
     * Applies an add, update, or delete action to each of the specified BiddableAdGroupCriterion or NegativeAdGroupCriterion, which each contain a ProductPartition.
     * @link http://msdn.microsoft.com/en-us/library/dn913134(v=msads.100).aspx ApplyProductPartitionActions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::ApplyProductPartitionActions
     */
    final class ApplyProductPartitionActionsResponse
    {
        /**
         * A list of identifiers that identify the criterion that had the action applied.
         * @var integer[]
         */
        public $AdGroupCriterionIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Deletes one or more ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277537(v=msads.100).aspx DeleteAdExtensions Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensions
     */
    final class DeleteAdExtensionsRequest
    {
        /**
         * The identifier of the account that owns the extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifiers of the extensions to delete.
         * @var integer[]
         */
        public $AdExtensionIds;
    }

    /**
     * Deletes one or more ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277537(v=msads.100).aspx DeleteAdExtensions Response Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensions
     */
    final class DeleteAdExtensionsResponse
    {
    }

    /**
     * Removes the specified association from the respective campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236305(v=msads.100).aspx DeleteAdExtensionsAssociations Request Object
     * 
     * @uses AdExtensionIdToEntityIdAssociation
     * @uses AssociationType
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensionsAssociations
     */
    final class DeleteAdExtensionsAssociationsRequest
    {
        /**
         * The identifier of the account that owns the extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of ad extensions that are associated with campaigns or ad groups before calling this operation.
         * @var AdExtensionIdToEntityIdAssociation[]
         */
        public $AdExtensionIdToEntityIdAssociations;

        /**
         * The entity type or types associated with an ad extension.
         * @var AssociationType
         */
        public $AssociationType;
    }

    /**
     * Removes the specified association from the respective campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236305(v=msads.100).aspx DeleteAdExtensionsAssociations Response Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensionsAssociations
     */
    final class DeleteAdExtensionsAssociationsResponse
    {
    }

    /**
     * Deletes the specified ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn236302(v=msads.100).aspx DeleteAdGroupCriterions Request Object
     * 
     * @uses CriterionType
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupCriterions
     */
    final class DeleteAdGroupCriterionsRequest
    {
        /**
         * The identifier of the account that owns the criterion to delete.
         * @var integer
         */
        public $AccountId;

        /**
         * A list of unique identifiers that identify the criterion to delete.
         * @var integer[]
         */
        public $AdGroupCriterionIds;

        /**
         * The identifier of the ad group that owns the criterion to delete.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The type of ad group criterion to delete, for example Webpage.
         * @var CriterionType
         */
        public $CriterionType;
    }

    /**
     * Deletes the specified ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn236302(v=msads.100).aspx DeleteAdGroupCriterions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupCriterions
     */
    final class DeleteAdGroupCriterionsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Deletes one or more ad group remarketing list associations.
     * @link http://msdn.microsoft.com/en-us/library/mt735051(v=msads.100).aspx DeleteAdGroupRemarketingListAssociations Request Object
     * 
     * @uses AdGroupRemarketingListAssociation
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupRemarketingListAssociations
     */
    final class DeleteAdGroupRemarketingListAssociationsRequest
    {
        /**
         * The list of up to 1,000 ad group remarketing list associations to delete.
         * @var AdGroupRemarketingListAssociation[]
         */
        public $AdGroupRemarketingListAssociations;
    }

    /**
     * Deletes one or more ad group remarketing list associations.
     * @link http://msdn.microsoft.com/en-us/library/mt735051(v=msads.100).aspx DeleteAdGroupRemarketingListAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupRemarketingListAssociations
     */
    final class DeleteAdGroupRemarketingListAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Deletes one or more ad groups in a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn236307(v=msads.100).aspx DeleteAdGroups Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAdGroups
     */
    final class DeleteAdGroupsRequest
    {
        /**
         * The campaign that contains the ad groups that will be deleted.
         * @var integer
         */
        public $CampaignId;

        /**
         * A maximum of 1,000 ad group identifiers to delete.
         * @var integer[]
         */
        public $AdGroupIds;
    }

    /**
     * Deletes one or more ad groups in a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn236307(v=msads.100).aspx DeleteAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdGroups
     */
    final class DeleteAdGroupsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Deletes one or more ads in a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236310(v=msads.100).aspx DeleteAds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAds
     */
    final class DeleteAdsRequest
    {
        /**
         * The ID of the ad group that contains the ads to delete.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The IDs of the ads to delete.
         * @var integer[]
         */
        public $AdIds;
    }

    /**
     * Deletes one or more ads in a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236310(v=msads.100).aspx DeleteAds Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAds
     */
    final class DeleteAdsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Deletes budgets from the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750547(v=msads.100).aspx DeleteBudgets Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteBudgets
     */
    final class DeleteBudgetsRequest
    {
        /**
         * A maximum of 1,000 budget identifiers to delete from the account's shared budget library.
         * @var integer[]
         */
        public $BudgetIds;
    }

    /**
     * Deletes budgets from the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750547(v=msads.100).aspx DeleteBudgets Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteBudgets
     */
    final class DeleteBudgetsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Deletes one or more campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913125(v=msads.100).aspx DeleteCampaignCriterions Request Object
     * 
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::DeleteCampaignCriterions
     */
    final class DeleteCampaignCriterionsRequest
    {
        /**
         * A list of unique system identifiers corresponding to the campaign criterions that you want to delete.
         * @var integer[]
         */
        public $CampaignCriterionIds;

        /**
         * The type of campaign criterion, for example ProductScope or Webpage.
         * @var CampaignCriterionType
         */
        public $CriterionType;
    }

    /**
     * Deletes one or more campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913125(v=msads.100).aspx DeleteCampaignCriterions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteCampaignCriterions
     */
    final class DeleteCampaignCriterionsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Deletes one or more campaigns in a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236314(v=msads.100).aspx DeleteCampaigns Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteCampaigns
     */
    final class DeleteCampaignsRequest
    {
        /**
         * The identifier of the account that contains the campaigns to delete.
         * @var integer
         */
        public $AccountId;

        /**
         * A maximum of 100 campaign identifiers to delete.
         * @var integer[]
         */
        public $CampaignIds;
    }

    /**
     * Deletes one or more campaigns in a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236314(v=msads.100).aspx DeleteCampaigns Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteCampaigns
     */
    final class DeleteCampaignsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Deletes one or more keywords in a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236318(v=msads.100).aspx DeleteKeywords Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteKeywords
     */
    final class DeleteKeywordsRequest
    {
        /**
         * The identifier of the ad group that contains the keywords to delete.
         * @var integer
         */
        public $AdGroupId;

        /**
         * A maximum of 1,000 keywords identifiers to delete.
         * @var integer[]
         */
        public $KeywordIds;
    }

    /**
     * Deletes one or more keywords in a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236318(v=msads.100).aspx DeleteKeywords Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteKeywords
     */
    final class DeleteKeywordsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Deletes list items such as negative keywords from the corresponding list.
     * @link http://msdn.microsoft.com/en-us/library/dn743723(v=msads.100).aspx DeleteListItemsFromSharedList Request Object
     * 
     * @uses SharedList
     * @used-by BingAdsCampaignManagementService::DeleteListItemsFromSharedList
     */
    final class DeleteListItemsFromSharedListRequest
    {
        /**
         * An array of identifiers of the list items to delete from the shared list, for example a list of negative keyword identifiers.
         * @var integer[]
         */
        public $ListItemIds;

        /**
         * The list within the account's shared library, from which to delete the specified list items.
         * @var SharedList
         */
        public $SharedList;
    }

    /**
     * Deletes list items such as negative keywords from the corresponding list.
     * @link http://msdn.microsoft.com/en-us/library/dn743723(v=msads.100).aspx DeleteListItemsFromSharedList Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteListItemsFromSharedList
     */
    final class DeleteListItemsFromSharedListResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Deletes the specified media from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766193(v=msads.100).aspx DeleteMedia Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteMedia
     */
    final class DeleteMediaRequest
    {
        /**
         * The identifier of the account that owns the media library.
         * @var integer
         */
        public $AccountId;

        /**
         * A maximum of 100 media identifiers to delete from the account's media library.
         * @var integer[]
         */
        public $MediaIds;
    }

    /**
     * Deletes the specified media from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766193(v=msads.100).aspx DeleteMedia Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteMedia
     */
    final class DeleteMediaResponse
    {
        /**
         * An array of BatchError objects that contain details for any media that were not successfully deleted.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Deletes negative keywords from the specified campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743725(v=msads.100).aspx DeleteNegativeKeywordsFromEntities Request Object
     * 
     * @uses EntityNegativeKeyword
     * @used-by BingAdsCampaignManagementService::DeleteNegativeKeywordsFromEntities
     */
    final class DeleteNegativeKeywordsFromEntitiesRequest
    {
        /**
         * An array of negative keyword with associated entity such as a campaign or ad group.
         * @var EntityNegativeKeyword[]
         */
        public $EntityNegativeKeywords;
    }

    /**
     * Deletes negative keywords from the specified campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743725(v=msads.100).aspx DeleteNegativeKeywordsFromEntities Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::DeleteNegativeKeywordsFromEntities
     */
    final class DeleteNegativeKeywordsFromEntitiesResponse
    {
        /**
         * An array of BatchErrorCollection objects that contain details for any criterion that were not successfully deleted.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }

    final class DeleteRemarketingListsRequest
    {
        public $RemarketingListIds;
    }

    final class DeleteRemarketingListsResponse
    {
        public $PartialErrors;
    }

    /**
     * Deletes shared entities such as negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743726(v=msads.100).aspx DeleteSharedEntities Request Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntities
     */
    final class DeleteSharedEntitiesRequest
    {
        /**
         * The shared entities to delete from the account's shared library, for example negative keyword lists.
         * @var SharedEntity[]
         */
        public $SharedEntities;
    }

    /**
     * Deletes shared entities such as negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743726(v=msads.100).aspx DeleteSharedEntities Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntities
     */
    final class DeleteSharedEntitiesResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Removes the association between a shared entity such as a negative keyword list and an entity such as a campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn743727(v=msads.100).aspx DeleteSharedEntityAssociations Request Object
     * 
     * @uses SharedEntityAssociation
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntityAssociations
     */
    final class DeleteSharedEntityAssociationsRequest
    {
        /**
         * An array of objects that associate a shared entity such as a negative keyword list and an entity such as a campaign.
         * @var SharedEntityAssociation[]
         */
        public $Associations;
    }

    /**
     * Removes the association between a shared entity such as a negative keyword list and an entity such as a campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn743727(v=msads.100).aspx DeleteSharedEntityAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntityAssociations
     */
    final class DeleteSharedEntityAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any associations that were not successfully deleted.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Deletes one or more website-placement bids from an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236315(v=msads.100).aspx DeleteSitePlacements Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteSitePlacements
     */
    final class DeleteSitePlacementsRequest
    {
        /**
         * The identifier of the ad group from which to delete the website placement bids.
         * @var integer
         */
        public $AdGroupId;

        /**
         * An array of long values that specifies the site placement bids to be removed.
         * @var integer[]
         */
        public $SitePlacementIds;
    }

    /**
     * Deletes one or more website-placement bids from an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236315(v=msads.100).aspx DeleteSitePlacements Response Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteSitePlacements
     */
    final class DeleteSitePlacementsResponse
    {
    }

    /**
     * Removes the specified target association for the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277500(v=msads.100).aspx DeleteTargetFromAdGroup Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetFromAdGroup
     */
    final class DeleteTargetFromAdGroupRequest
    {
        /**
         * The identifier of the ad group from which to remove the target association.
         * @var integer
         */
        public $AdGroupId;
    }

    /**
     * Removes the specified target association for the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277500(v=msads.100).aspx DeleteTargetFromAdGroup Response Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetFromAdGroup
     */
    final class DeleteTargetFromAdGroupResponse
    {
    }

    /**
     * Removes the target association for the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277503(v=msads.100).aspx DeleteTargetFromCampaign Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetFromCampaign
     */
    final class DeleteTargetFromCampaignRequest
    {
        /**
         * The identifier of the campaign from which to remove the target association.
         * @var integer
         */
        public $CampaignId;
    }

    /**
     * Removes the target association for the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277503(v=msads.100).aspx DeleteTargetFromCampaign Response Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetFromCampaign
     */
    final class DeleteTargetFromCampaignResponse
    {
    }

    /**
     * Removes targets from your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn277507(v=msads.100).aspx DeleteTargetsFromLibrary Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetsFromLibrary
     */
    final class DeleteTargetsFromLibraryRequest
    {
        /**
         * An array of long values that specifies the identifiers of the targets to remove from the target library.
         * @var integer[]
         */
        public $TargetIds;
    }

    /**
     * Removes targets from your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn277507(v=msads.100).aspx DeleteTargetsFromLibrary Response Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetsFromLibrary
     */
    final class DeleteTargetsFromLibraryResponse
    {
    }

    /**
     * Gets the migration status info for the specified accounts.
     * @link http://msdn.microsoft.com/en-us/library/mt706125(v=msads.100).aspx GetAccountMigrationStatuses Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAccountMigrationStatuses
     */
    final class GetAccountMigrationStatusesRequest
    {
        /**
         * The identifiers of each account to request migration status.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * Filters the returned migration status by migration type.
         * @var string
         */
        public $MigrationType;
    }

    /**
     * Gets the migration status info for the specified accounts.
     * @link http://msdn.microsoft.com/en-us/library/mt706125(v=msads.100).aspx GetAccountMigrationStatuses Response Object
     * 
     * @uses AccountMigrationStatusesInfo
     * @used-by BingAdsCampaignManagementService::GetAccountMigrationStatuses
     */
    final class GetAccountMigrationStatusesResponse
    {
        /**
         * An array of account migration statuses.
         * @var AccountMigrationStatusesInfo[]
         */
        public $MigrationStatuses;
    }

    /**
     * Gets the ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277509(v=msads.100).aspx GetAdExtensionIdsByAccountId Request Object
     * 
     * @uses AdExtensionsTypeFilter
     * @uses AssociationType
     * @used-by BingAdsCampaignManagementService::GetAdExtensionIdsByAccountId
     */
    final class GetAdExtensionIdsByAccountIdRequest
    {
        /**
         * The identifier of the account that contains the ad extensions to get.
         * @var integer
         */
        public $AccountId;

        /**
         * The types of ad extensions to get from the account.
         * @var AdExtensionsTypeFilter
         */
        public $AdExtensionType;

        /**
         * A value that filters the extensions based on whether they're associated with a specific entity type.
         * @var AssociationType
         */
        public $AssociationType;
    }

    /**
     * Gets the ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277509(v=msads.100).aspx GetAdExtensionIdsByAccountId Response Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAdExtensionIdsByAccountId
     */
    final class GetAdExtensionIdsByAccountIdResponse
    {
        /**
         * A list of ad extension IDs.
         * @var integer[]
         */
        public $AdExtensionIds;
    }

    /**
     * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
     * @link http://msdn.microsoft.com/en-us/library/dn236309(v=msads.100).aspx GetAdExtensionsAssociations Request Object
     * 
     * @uses AdExtensionsTypeFilter
     * @uses AssociationType
     * @uses AdExtensionAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsAssociations
     */
    final class GetAdExtensionsAssociationsRequest
    {
        /**
         * The identifier of the account that owns the extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * Filters the returned associations by ad extension type.
         * @var AdExtensionsTypeFilter
         */
        public $AdExtensionType;

        /**
         * Filters the returned associations by entity type.
         * @var AssociationType
         */
        public $AssociationType;

        /**
         * The list of entity identifiers by which you may request the respective ad extension associations.
         * @var integer[]
         */
        public $EntityIds;

        /**
         * The list of additional elements that you want included within each returned AdExtension object.
         * @var AdExtensionAdditionalField
         */
        public $ReturnAdditionalFields;
    }

    /**
     * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
     * @link http://msdn.microsoft.com/en-us/library/dn236309(v=msads.100).aspx GetAdExtensionsAssociations Response Object
     * 
     * @uses AdExtensionAssociationCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsAssociations
     */
    final class GetAdExtensionsAssociationsResponse
    {
        /**
         * An array of ad extension association collections.
         * @var AdExtensionAssociationCollection[]
         */
        public $AdExtensionAssociationCollection;

        /**
         * An array of BatchError objects that contain details for any associations that were not successfully retrieved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets the specified ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277515(v=msads.100).aspx GetAdExtensionsByIds Request Object
     * 
     * @uses AdExtensionsTypeFilter
     * @uses AdExtensionAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsByIds
     */
    final class GetAdExtensionsByIdsRequest
    {
        /**
         * The identifier of the account that owns the ad extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * A list of ad extension identifiers.
         * @var integer[]
         */
        public $AdExtensionIds;

        /**
         * The types of ad extensions that the list of identifiers contains.
         * @var AdExtensionsTypeFilter
         */
        public $AdExtensionType;

        /**
         * The list of additional elements that you want included within each returned AdExtension object.
         * @var AdExtensionAdditionalField
         */
        public $ReturnAdditionalFields;
    }

    /**
     * Gets the specified ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277515(v=msads.100).aspx GetAdExtensionsByIds Response Object
     * 
     * @uses AdExtension
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsByIds
     */
    final class GetAdExtensionsByIdsResponse
    {
        /**
         * A list of AdExtension objects.
         * @var AdExtension[]
         */
        public $AdExtensions;
    }

    /**
     * Gets editorial rejection reasons for the respective ad extension and entity associations.
     * @link http://msdn.microsoft.com/en-us/library/dn236313(v=msads.100).aspx GetAdExtensionsEditorialReasons Request Object
     * 
     * @uses AdExtensionIdToEntityIdAssociation
     * @uses AssociationType
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsEditorialReasons
     */
    final class GetAdExtensionsEditorialReasonsRequest
    {
        /**
         * The identifier of the account that owns the extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of ad extensions and corresponding entity associations to get.
         * @var AdExtensionIdToEntityIdAssociation[]
         */
        public $AdExtensionIdToEntityIdAssociations;

        /**
         * Filters the returned associations by entity type.
         * @var AssociationType
         */
        public $AssociationType;
    }

    /**
     * Gets editorial rejection reasons for the respective ad extension and entity associations.
     * @link http://msdn.microsoft.com/en-us/library/dn236313(v=msads.100).aspx GetAdExtensionsEditorialReasons Response Object
     * 
     * @uses AdExtensionEditorialReasonCollection
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsEditorialReasons
     */
    final class GetAdExtensionsEditorialReasonsResponse
    {
        /**
         * The collection of ad extension editorial reasons.
         * @var AdExtensionEditorialReasonCollection[]
         */
        public $EditorialReasons;
    }

    /**
     * Gets ad group criterions by identifiers and types.
     * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.100).aspx GetAdGroupCriterionsByIds Request Object
     * 
     * @uses CriterionType
     * @used-by BingAdsCampaignManagementService::GetAdGroupCriterionsByIds
     */
    final class GetAdGroupCriterionsByIdsRequest
    {
        /**
         * The identifier of the account that owns the criterions to get.
         * @var integer
         */
        public $AccountId;

        /**
         * A list of unique identifiers that identify the criterions to get.
         * @var integer[]
         */
        public $AdGroupCriterionIds;

        /**
         * The identifier of the ad group that owns the criterions to get.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The types of ad group criterion to get, for example ProductPartition or Webpage.
         * @var CriterionType
         */
        public $CriterionType;
    }

    /**
     * Gets ad group criterions by identifiers and types.
     * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.100).aspx GetAdGroupCriterionsByIds Response Object
     * 
     * @uses AdGroupCriterion
     * @used-by BingAdsCampaignManagementService::GetAdGroupCriterionsByIds
     */
    final class GetAdGroupCriterionsByIdsResponse
    {
        /**
         * The list of criterions that correspond directly to the identifiers specified in the request.
         * @var AdGroupCriterion[]
         */
        public $AdGroupCriterions;
    }

    /**
     * Gets the ad group remarketing list associations.
     * @link http://msdn.microsoft.com/en-us/library/mt735050(v=msads.100).aspx GetAdGroupRemarketingListAssociations Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAdGroupRemarketingListAssociations
     */
    final class GetAdGroupRemarketingListAssociationsRequest
    {
        /**
         * A list of unique ad group identifiers that identify the ad group remarketing list associations to get.
         * @var integer[]
         */
        public $AdGroupIds;
    }

    /**
     * Gets the ad group remarketing list associations.
     * @link http://msdn.microsoft.com/en-us/library/mt735050(v=msads.100).aspx GetAdGroupRemarketingListAssociations Response Object
     * 
     * @uses AdGroupRemarketingListAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdGroupRemarketingListAssociations
     */
    final class GetAdGroupRemarketingListAssociationsResponse
    {
        /**
         * The list of ad group remarketing list associations do not correspond directly to the ad group identifiers specified in the request because there can be multiple remarketing lists associated with each ad group specified in the request.
         * @var AdGroupRemarketingListAssociation[]
         */
        public $AdGroupRemarketingListAssociations;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets the ad groups that exist within a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277524(v=msads.100).aspx GetAdGroupsByCampaignId Request Object
     * 
     * @uses AdGroupAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByCampaignId
     */
    final class GetAdGroupsByCampaignIdRequest
    {
        /**
         * The identifier of the campaign that contains the ad groups to get.
         * @var integer
         */
        public $CampaignId;

        /**
         * The list of additional elements that you want included within each returned AdGroup object.
         * @var AdGroupAdditionalField
         */
        public $ReturnAdditionalFields;
    }

    /**
     * Gets the ad groups that exist within a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277524(v=msads.100).aspx GetAdGroupsByCampaignId Response Object
     * 
     * @uses AdGroup
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByCampaignId
     */
    final class GetAdGroupsByCampaignIdResponse
    {
        /**
         * An array of AdGroup objects that represents the retrieved ad groups.
         * @var AdGroup[]
         */
        public $AdGroups;
    }

    /**
     * Gets the specified ad groups that exist within a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277529(v=msads.100).aspx GetAdGroupsByIds Request Object
     * 
     * @uses AdGroupAdditionalField
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByIds
     */
    final class GetAdGroupsByIdsRequest
    {
        /**
         * The identifier of the campaign that contains the ad groups to get.
         * @var integer
         */
        public $CampaignId;

        /**
         * A maximum of 1,000 identifiers of the ad groups to get.
         * @var integer[]
         */
        public $AdGroupIds;

        /**
         * The list of additional elements that you want included within each returned AdGroup object.
         * @var AdGroupAdditionalField
         */
        public $ReturnAdditionalFields;
    }

    /**
     * Gets the specified ad groups that exist within a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277529(v=msads.100).aspx GetAdGroupsByIds Response Object
     * 
     * @uses AdGroup
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByIds
     */
    final class GetAdGroupsByIdsResponse
    {
        /**
         * An array of AdGroup objects that corresponds directly to the ad group identifiers that you specified in the request.
         * @var AdGroup[]
         */
        public $AdGroups;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Retrieves the ads that are associated with an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277534(v=msads.100).aspx GetAdsByAdGroupId Request Object
     * 
     * @uses AdType
     * @used-by BingAdsCampaignManagementService::GetAdsByAdGroupId
     */
    final class GetAdsByAdGroupIdRequest
    {
        /**
         * The identifier of the ad group to retrieve the ads from.
         * @var integer
         */
        public $AdGroupId;

        /**
         * One or more types of ads to return.
         * @var AdType[]
         */
        public $AdTypes;
    }

    /**
     * Retrieves the ads that are associated with an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277534(v=msads.100).aspx GetAdsByAdGroupId Response Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::GetAdsByAdGroupId
     */
    final class GetAdsByAdGroupIdResponse
    {
        /**
         * An array of Ad objects that represents the ads that have been retrieved.
         * @var Ad[]
         */
        public $Ads;
    }

    /**
     * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
     * @link http://msdn.microsoft.com/en-us/library/dn277538(v=msads.100).aspx GetAdsByEditorialStatus Request Object
     * 
     * @uses AdEditorialStatus
     * @uses AdType
     * @used-by BingAdsCampaignManagementService::GetAdsByEditorialStatus
     */
    final class GetAdsByEditorialStatusRequest
    {
        /**
         * The identifier of the ad group to retrieve the ads from.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The AdEditorialStatus value that specifies the review status that the ads must have to be returned.
         * @var AdEditorialStatus
         */
        public $EditorialStatus;

        /**
         * One or more types of ads to return.
         * @var AdType[]
         */
        public $AdTypes;
    }

    /**
     * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
     * @link http://msdn.microsoft.com/en-us/library/dn277538(v=msads.100).aspx GetAdsByEditorialStatus Response Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::GetAdsByEditorialStatus
     */
    final class GetAdsByEditorialStatusResponse
    {
        /**
         * An array of Ad-derived objects that represents the ads that have been retrieved.
         * @var Ad[]
         */
        public $Ads;
    }

    /**
     * Retrieves the specified ads from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236296(v=msads.100).aspx GetAdsByIds Request Object
     * 
     * @uses AdType
     * @used-by BingAdsCampaignManagementService::GetAdsByIds
     */
    final class GetAdsByIdsRequest
    {
        /**
         * The identifier of the ad group that contains the ads to get.
         * @var integer
         */
        public $AdGroupId;

        /**
         * A maximum of 20 identifiers of the requested ads.
         * @var integer[]
         */
        public $AdIds;

        /**
         * One or more types of ads to return.
         * @var AdType[]
         */
        public $AdTypes;
    }

    /**
     * Retrieves the specified ads from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236296(v=msads.100).aspx GetAdsByIds Response Object
     * 
     * @uses Ad
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdsByIds
     */
    final class GetAdsByIdsResponse
    {
        /**
         * An array of Ad objects that corresponds directly to the ad identifiers that you specified in the request.
         * @var Ad[]
         */
        public $Ads;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets the Bing Merchant Center stores for the specified customer.
     * @link http://msdn.microsoft.com/en-us/library/dn411607(v=msads.100).aspx GetBMCStoresByCustomerId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetBMCStoresByCustomerId
     */
    final class GetBMCStoresByCustomerIdRequest
    {
    }

    /**
     * Gets the Bing Merchant Center stores for the specified customer.
     * @link http://msdn.microsoft.com/en-us/library/dn411607(v=msads.100).aspx GetBMCStoresByCustomerId Response Object
     * 
     * @uses BMCStore
     * @used-by BingAdsCampaignManagementService::GetBMCStoresByCustomerId
     */
    final class GetBMCStoresByCustomerIdResponse
    {
        /**
         * The list of Bing Merchant Center stores for the specified customer.
         * @var BMCStore[]
         */
        public $BMCStores;
    }

    /**
     * Gets the list of supported sales country codes for Bing Shopping campaigns.
     * @link http://msdn.microsoft.com/en-us/library/mt750281(v=msads.100).aspx GetBSCCountries Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetBSCCountries
     */
    final class GetBSCCountriesRequest
    {
    }

    /**
     * Gets the list of supported sales country codes for Bing Shopping campaigns.
     * @link http://msdn.microsoft.com/en-us/library/mt750281(v=msads.100).aspx GetBSCCountries Response Object
     * 
     * @used-by BingAdsCampaignManagementService::GetBSCCountries
     */
    final class GetBSCCountriesResponse
    {
        /**
         * The list of supported sales country codes for Bing Shopping campaigns.
         * @var string[]
         */
        public $CountryCodes;
    }

    /**
     * Gets the specified budgets from the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750545(v=msads.100).aspx GetBudgetsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetBudgetsByIds
     */
    final class GetBudgetsByIdsRequest
    {
        /**
         * A list of unique budget identifiers that identify the budgets to get.
         * @var integer[]
         */
        public $BudgetIds;
    }

    /**
     * Gets the specified budgets from the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750545(v=msads.100).aspx GetBudgetsByIds Response Object
     * 
     * @uses Budget
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetBudgetsByIds
     */
    final class GetBudgetsByIdsResponse
    {
        /**
         * An array of Budget objects that corresponds directly to the budget identifiers that you specified in the request.
         * @var Budget[]
         */
        public $Budgets;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets the specified campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913135(v=msads.100).aspx GetCampaignCriterionsByIds Request Object
     * 
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByIds
     */
    final class GetCampaignCriterionsByIdsRequest
    {
        /**
         * A list of unique identifiers that identify the campaign criterions to get.
         * @var integer[]
         */
        public $CampaignCriterionIds;

        /**
         * The unique identifier of the campaign whose criterions you want to get.
         * @var integer
         */
        public $CampaignId;

        /**
         * The types of campaign criterion to get, for example ProductScope or Webpage.
         * @var CampaignCriterionType
         */
        public $CriterionType;
    }

    /**
     * Gets the specified campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913135(v=msads.100).aspx GetCampaignCriterionsByIds Response Object
     * 
     * @uses CampaignCriterion
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByIds
     */
    final class GetCampaignCriterionsByIdsResponse
    {
        /**
         * The list of campaign criterions that correspond directly to the identifiers specified in the request.
         * @var CampaignCriterion[]
         */
        public $CampaignCriterions;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets the campaign identifiers that share each specified budget.
     * @link http://msdn.microsoft.com/en-us/library/mt750549(v=msads.100).aspx GetCampaignIdsByBudgetIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetCampaignIdsByBudgetIds
     */
    final class GetCampaignIdsByBudgetIdsRequest
    {
        /**
         * A list of unique budget identifiers that identify the campaign identifiers to get.
         * @var integer[]
         */
        public $BudgetIds;
    }

    /**
     * Gets the campaign identifiers that share each specified budget.
     * @link http://msdn.microsoft.com/en-us/library/mt750549(v=msads.100).aspx GetCampaignIdsByBudgetIds Response Object
     * 
     * @uses IdCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetCampaignIdsByBudgetIds
     */
    final class GetCampaignIdsByBudgetIdsResponse
    {
        /**
         * An array of IdCollection objects that corresponds directly to the budget identifiers that you specified in the request.
         * @var IdCollection[]
         */
        public $CampaignIdCollection;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Retrieves all the campaigns that exist within a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236299(v=msads.100).aspx GetCampaignsByAccountId Request Object
     * 
     * @uses CampaignType
     * @uses CampaignAdditionalField
     * @used-by BingAdsCampaignManagementService::GetCampaignsByAccountId
     */
    final class GetCampaignsByAccountIdRequest
    {
        /**
         * The identifier of the account that contains the campaigns to get.
         * @var integer
         */
        public $AccountId;

        /**
         * The type of campaign to get, for example SearchAndContent, Shopping, or DynamicSearchAds.
         * @var CampaignType
         */
        public $CampaignType;

        /**
         * The list of additional elements that you want included within each returned Campaign object.
         * @var CampaignAdditionalField
         */
        public $ReturnAdditionalFields;
    }

    /**
     * Retrieves all the campaigns that exist within a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236299(v=msads.100).aspx GetCampaignsByAccountId Response Object
     * 
     * @uses Campaign
     * @used-by BingAdsCampaignManagementService::GetCampaignsByAccountId
     */
    final class GetCampaignsByAccountIdResponse
    {
        /**
         * An array of Campaign objects that represents the campaigns that were retrieved.
         * @var Campaign[]
         */
        public $Campaigns;
    }

    /**
     * Retrieves the specified campaigns from the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.100).aspx GetCampaignsByIds Request Object
     * 
     * @uses CampaignType
     * @uses CampaignAdditionalField
     * @used-by BingAdsCampaignManagementService::GetCampaignsByIds
     */
    final class GetCampaignsByIdsRequest
    {
        /**
         * The identifier of the account that contains the campaigns to get.
         * @var integer
         */
        public $AccountId;

        /**
         * A maximum of 100 identifiers of the campaigns to get from the specified account.
         * @var integer[]
         */
        public $CampaignIds;

        /**
         * The type of campaign to get, for example SearchAndContent, Shopping, or DynamicSearchAds.
         * @var CampaignType
         */
        public $CampaignType;

        /**
         * The list of additional elements that you want included within each returned Campaign object.
         * @var CampaignAdditionalField
         */
        public $ReturnAdditionalFields;
    }

    /**
     * Retrieves the specified campaigns from the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.100).aspx GetCampaignsByIds Response Object
     * 
     * @uses Campaign
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetCampaignsByIds
     */
    final class GetCampaignsByIdsResponse
    {
        /**
         * An array of Campaign objects that corresponds directly to the campaign identifiers that you specified in the request.
         * @var Campaign[]
         */
        public $Campaigns;

        /**
         * An array of BatchError objects that contain details for any campaigns that were not successfully retrieved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    final class GetCampaignSizesByAccountIdRequest
    {
        public $AccountId;
        public $CampaignIds;
    }

    final class GetCampaignSizesByAccountIdResponse
    {
        public $CampaignSizes;
    }

    final class GetConfigValueRequest
    {
        public $ConfigKey;
    }

    final class GetConfigValueResponse
    {
        public $ConfigValue;
    }

    /**
     * Gets the specified conversion goals.
     * @link http://msdn.microsoft.com/en-us/library/mt759540(v=msads.100).aspx GetConversionGoalsByIds Request Object
     * 
     * @uses ConversionGoalType
     * @used-by BingAdsCampaignManagementService::GetConversionGoalsByIds
     */
    final class GetConversionGoalsByIdsRequest
    {
        /**
         * A maximum of 100 identifiers of the conversion goals that you want to get.
         * @var integer[]
         */
        public $ConversionGoalIds;

        /**
         * One or more types of conversion goals to return.
         * @var ConversionGoalType
         */
        public $ConversionGoalTypes;
    }

    /**
     * Gets the specified conversion goals.
     * @link http://msdn.microsoft.com/en-us/library/mt759540(v=msads.100).aspx GetConversionGoalsByIds Response Object
     * 
     * @uses ConversionGoal
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetConversionGoalsByIds
     */
    final class GetConversionGoalsByIdsResponse
    {
        /**
         * An array of ConversionGoal objects that corresponds directly to the conversion goal identifiers that you specified in the request.
         * @var ConversionGoal[]
         */
        public $ConversionGoals;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets the conversion goals that use the specified UET tags.
     * @link http://msdn.microsoft.com/en-us/library/mt759541(v=msads.100).aspx GetConversionGoalsByTagIds Request Object
     * 
     * @uses ConversionGoalType
     * @used-by BingAdsCampaignManagementService::GetConversionGoalsByTagIds
     */
    final class GetConversionGoalsByTagIdsRequest
    {
        /**
         * A maximum of 100 tag identifiers that are used by the returned conversion goals.
         * @var integer[]
         */
        public $TagIds;

        /**
         * One or more types of conversion goals to return.
         * @var ConversionGoalType
         */
        public $ConversionGoalTypes;
    }

    /**
     * Gets the conversion goals that use the specified UET tags.
     * @link http://msdn.microsoft.com/en-us/library/mt759541(v=msads.100).aspx GetConversionGoalsByTagIds Response Object
     * 
     * @uses ConversionGoal
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetConversionGoalsByTagIds
     */
    final class GetConversionGoalsByTagIdsResponse
    {
        /**
         * The list of conversion goals do not correspond directly to the tag identifiers specified in the request because there can be multiple conversion goals that use the same tag identifier specified in the request.
         * @var ConversionGoal[]
         */
        public $ConversionGoals;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
     * @link http://msdn.microsoft.com/en-us/library/dn236306(v=msads.100).aspx GetEditorialReasonsByIds Request Object
     * 
     * @uses EntityIdToParentIdAssociation
     * @uses EntityType
     * @used-by BingAdsCampaignManagementService::GetEditorialReasonsByIds
     */
    final class GetEditorialReasonsByIdsRequest
    {
        /**
         * The identifier of the account that contains the specified entities.
         * @var integer
         */
        public $AccountId;

        /**
         * A list of EntityIdToParentIdAssociation objects that each contain the unique system identifier of an entity such as ad or keyword, and the identifier of its parent.
         * @var EntityIdToParentIdAssociation[]
         */
        public $EntityIdToParentIdAssociations;

        /**
         * The type of entities that the entity list contains.
         * @var EntityType
         */
        public $EntityType;
    }

    /**
     * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
     * @link http://msdn.microsoft.com/en-us/library/dn236306(v=msads.100).aspx GetEditorialReasonsByIds Response Object
     * 
     * @uses EditorialReasonCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetEditorialReasonsByIds
     */
    final class GetEditorialReasonsByIdsResponse
    {
        /**
         * An array of EditorialReasonCollection objects that corresponds directly to the EntityIdToParentIdAssociation objects that you specified in the request.
         * @var EditorialReasonCollection[]
         */
        public $EditorialReasons;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets a temporary URL that you can use to download a file that contains the supported geographical location targeting codes.
     * @link http://msdn.microsoft.com/en-us/library/mt791775(v=msads.100).aspx GetGeoLocationsFileUrl Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetGeoLocationsFileUrl
     */
    final class GetGeoLocationsFileUrlRequest
    {
        /**
         * The version of the location file that you want to download.
         * @var string
         */
        public $Version;

        /**
         * The language and locale of the geographical location code descriptions.
         * @var string
         */
        public $LanguageLocale;
    }

    /**
     * Gets a temporary URL that you can use to download a file that contains the supported geographical location targeting codes.
     * @link http://msdn.microsoft.com/en-us/library/mt791775(v=msads.100).aspx GetGeoLocationsFileUrl Response Object
     * 
     * @used-by BingAdsCampaignManagementService::GetGeoLocationsFileUrl
     */
    final class GetGeoLocationsFileUrlResponse
    {
        /**
         * The file URL that you can use to download the geographical location targeting codes for the version, language, and locale that you requested.
         * @var string
         */
        public $FileUrl;

        /**
         * The date and time that the provided file URL will expire.
         * @var \DateTime
         */
        public $FileUrlExpiryTimeUtc;

        /**
         * The date and time that the geographical locations file for the specified version, language, and locale was last updated.
         * @var \DateTime
         */
        public $LastModifiedTimeUtc;
    }

    /**
     * Retrieves the keywords for an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236311(v=msads.100).aspx GetKeywordsByAdGroupId Request Object
     * 
     * @uses KeywordAdditionalField
     * @used-by BingAdsCampaignManagementService::GetKeywordsByAdGroupId
     */
    final class GetKeywordsByAdGroupIdRequest
    {
        /**
         * The identifier of the ad group that keywords are returned for.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The list of additional elements that you want included within each returned Keyword object.
         * @var KeywordAdditionalField
         */
        public $ReturnAdditionalFields;
    }

    /**
     * Retrieves the keywords for an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236311(v=msads.100).aspx GetKeywordsByAdGroupId Response Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::GetKeywordsByAdGroupId
     */
    final class GetKeywordsByAdGroupIdResponse
    {
        /**
         * An array of Keyword objects that represents the retrieved keywords.
         * @var Keyword[]
         */
        public $Keywords;
    }

    /**
     * Retrieves the keywords with the specified editorial review status.
     * @link http://msdn.microsoft.com/en-us/library/dn277501(v=msads.100).aspx GetKeywordsByEditorialStatus Request Object
     * 
     * @uses KeywordEditorialStatus
     * @uses KeywordAdditionalField
     * @used-by BingAdsCampaignManagementService::GetKeywordsByEditorialStatus
     */
    final class GetKeywordsByEditorialStatusRequest
    {
        /**
         * The identifier of the ad group that contains the keywords to retrieve.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The review status of the keywords to retrieve.
         * @var KeywordEditorialStatus
         */
        public $EditorialStatus;

        /**
         * The list of additional elements that you want included within each returned Keyword object.
         * @var KeywordAdditionalField
         */
        public $ReturnAdditionalFields;
    }

    /**
     * Retrieves the keywords with the specified editorial review status.
     * @link http://msdn.microsoft.com/en-us/library/dn277501(v=msads.100).aspx GetKeywordsByEditorialStatus Response Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::GetKeywordsByEditorialStatus
     */
    final class GetKeywordsByEditorialStatusResponse
    {
        /**
         * An array of Keyword objects that contains information about the keywords that were retrieved.
         * @var Keyword[]
         */
        public $Keywords;
    }

    /**
     * Retrieves the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/dn277505(v=msads.100).aspx GetKeywordsByIds Request Object
     * 
     * @uses KeywordAdditionalField
     * @used-by BingAdsCampaignManagementService::GetKeywordsByIds
     */
    final class GetKeywordsByIdsRequest
    {
        /**
         * The identifier of the ad group whose keywords you want to get.
         * @var integer
         */
        public $AdGroupId;

        /**
         * A maximum of 1,000 identifiers of the keywords to get.
         * @var integer[]
         */
        public $KeywordIds;

        /**
         * The list of additional elements that you want included within each returned Keyword object.
         * @var KeywordAdditionalField
         */
        public $ReturnAdditionalFields;
    }

    /**
     * Retrieves the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/dn277505(v=msads.100).aspx GetKeywordsByIds Response Object
     * 
     * @uses Keyword
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetKeywordsByIds
     */
    final class GetKeywordsByIdsResponse
    {
        /**
         * An array of Keyword objects that corresponds directly to the keyword identifiers that you specified in the request.
         * @var Keyword[]
         */
        public $Keywords;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets the list items such as the negative keywords of a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743729(v=msads.100).aspx GetListItemsBySharedList Request Object
     * 
     * @uses SharedList
     * @used-by BingAdsCampaignManagementService::GetListItemsBySharedList
     */
    final class GetListItemsBySharedListRequest
    {
        /**
         * The list within the account's shared library, from which to get the shared list items.
         * @var SharedList
         */
        public $SharedList;
    }

    /**
     * Gets the list items such as the negative keywords of a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743729(v=msads.100).aspx GetListItemsBySharedList Response Object
     * 
     * @uses SharedListItem
     * @used-by BingAdsCampaignManagementService::GetListItemsBySharedList
     */
    final class GetListItemsBySharedListResponse
    {
        /**
         * An array of list items returned from the shared list, for example a list of negative keywords.
         * @var SharedListItem[]
         */
        public $ListItems;
    }

    /**
     * Gets the media associations of the specified entity type from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn798359(v=msads.100).aspx GetMediaAssociations Request Object
     * 
     * @uses MediaEnabledEntityFilter
     * @used-by BingAdsCampaignManagementService::GetMediaAssociations
     */
    final class GetMediaAssociationsRequest
    {
        /**
         * Filters the results to only return media associations with the specified type of media enabled entity.
         * @var MediaEnabledEntityFilter
         */
        public $MediaEnabledEntities;

        /**
         * The identifiers of the media to get corresponding entity associations.
         * @var integer[]
         */
        public $MediaIds;
    }

    /**
     * Gets the media associations of the specified entity type from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn798359(v=msads.100).aspx GetMediaAssociations Response Object
     * 
     * @uses MediaAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetMediaAssociations
     */
    final class GetMediaAssociationsResponse
    {
        public $MediaAssociations;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets the specified media from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn277511(v=msads.100).aspx GetMediaByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetMediaByIds
     */
    final class GetMediaByIdsRequest
    {
        /**
         * The identifier of the account that owns the media library.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifiers of the media to get.
         * @var integer[]
         */
        public $MediaIds;
    }

    /**
     * Gets the specified media from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn277511(v=msads.100).aspx GetMediaByIds Response Object
     * 
     * @uses Media
     * @used-by BingAdsCampaignManagementService::GetMediaByIds
     */
    final class GetMediaByIdsResponse
    {
        /**
         * The specified media from the library.
         * @var Media[]
         */
        public $Media;
    }

    /**
     * Gets the media meta data of the specified entity type from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766196(v=msads.100).aspx GetMediaMetaDataByAccountId Request Object
     * 
     * @uses MediaEnabledEntityFilter
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByAccountId
     */
    final class GetMediaMetaDataByAccountIdRequest
    {
        /**
         * Determines the type of media enabled entity to get meta data.
         * @var MediaEnabledEntityFilter
         */
        public $MediaEnabledEntities;
    }

    /**
     * Gets the media meta data of the specified entity type from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766196(v=msads.100).aspx GetMediaMetaDataByAccountId Response Object
     * 
     * @uses MediaMetaData
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByAccountId
     */
    final class GetMediaMetaDataByAccountIdResponse
    {
        /**
         * The specified media meta data from the library.
         * @var MediaMetaData[]
         */
        public $MediaMetaData;
    }

    /**
     * Gets the specified media meta data from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766200(v=msads.100).aspx GetMediaMetaDataByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByIds
     */
    final class GetMediaMetaDataByIdsRequest
    {
        /**
         * The identifiers of the media to get.
         * @var integer[]
         */
        public $MediaIds;
    }

    /**
     * Gets the specified media meta data from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766200(v=msads.100).aspx GetMediaMetaDataByIds Response Object
     * 
     * @uses MediaMetaData
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByIds
     */
    final class GetMediaMetaDataByIdsResponse
    {
        /**
         * An array of MediaMetaData objects that corresponds directly to the media identifiers that you specified in the request.
         * @var MediaMetaData[]
         */
        public $MediaMetaData;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets the negative keywords that are only associated with the specified campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn743730(v=msads.100).aspx GetNegativeKeywordsByEntityIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetNegativeKeywordsByEntityIds
     */
    final class GetNegativeKeywordsByEntityIdsRequest
    {
        /**
         * An array of entity identifiers to return the associated negative keywords.
         * @var integer[]
         */
        public $EntityIds;

        /**
         * The type of entity corresponding to the specified EntityIds element.
         * @var string
         */
        public $EntityType;

        /**
         * The identifier of the parent entity corresponding to the specified EntityIds element.
         * @var integer
         */
        public $ParentEntityId;
    }

    /**
     * Gets the negative keywords that are only associated with the specified campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn743730(v=msads.100).aspx GetNegativeKeywordsByEntityIds Response Object
     * 
     * @uses EntityNegativeKeyword
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetNegativeKeywordsByEntityIds
     */
    final class GetNegativeKeywordsByEntityIdsResponse
    {
        /**
         * An array of EntityNegativeKeyword objects that corresponds directly to the entity identifiers that you specified in the request.
         * @var EntityNegativeKeyword[]
         */
        public $EntityNegativeKeywords;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets the negative site URLs of the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn277521(v=msads.100).aspx GetNegativeSitesByAdGroupIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetNegativeSitesByAdGroupIds
     */
    final class GetNegativeSitesByAdGroupIdsRequest
    {
        /**
         * The identifier of the campaign that contains the ad groups.
         * @var integer
         */
        public $CampaignId;

        /**
         * An array of identifiers of the ad groups that contain the negative site URLs that you want to get.
         * @var integer[]
         */
        public $AdGroupIds;
    }

    /**
     * Gets the negative site URLs of the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn277521(v=msads.100).aspx GetNegativeSitesByAdGroupIds Response Object
     * 
     * @uses AdGroupNegativeSites
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetNegativeSitesByAdGroupIds
     */
    final class GetNegativeSitesByAdGroupIdsResponse
    {
        /**
         * An array of AdGroupNegativeSites that corresponds directly to the ad group identifiers that you specified in the request.
         * @var AdGroupNegativeSites[]
         */
        public $AdGroupNegativeSites;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets the negative site URLs of the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn277525(v=msads.100).aspx GetNegativeSitesByCampaignIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetNegativeSitesByCampaignIds
     */
    final class GetNegativeSitesByCampaignIdsRequest
    {
        /**
         * The identifier of the account that contains the campaigns.
         * @var integer
         */
        public $AccountId;

        /**
         * An array of identifiers of the campaigns that contain the negative site URLs that you want to get.
         * @var integer[]
         */
        public $CampaignIds;
    }

    /**
     * Gets the negative site URLs of the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn277525(v=msads.100).aspx GetNegativeSitesByCampaignIds Response Object
     * 
     * @uses CampaignNegativeSites
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetNegativeSitesByCampaignIds
     */
    final class GetNegativeSitesByCampaignIdsResponse
    {
        /**
         * An array of CampaignNegativeSites that corresponds directly to the campaign identifiers that you specified in the request.
         * @var CampaignNegativeSites[]
         */
        public $CampaignNegativeSites;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Retrieves placement information for the specified URLs.
     * @link http://msdn.microsoft.com/en-us/library/dn277530(v=msads.100).aspx GetPlacementDetailsForUrls Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetPlacementDetailsForUrls
     */
    final class GetPlacementDetailsForUrlsRequest
    {
        /**
         * An array of URLs from the publisher websites where you want to display your text ads.
         * @var string[]
         */
        public $Urls;
    }

    /**
     * Retrieves placement information for the specified URLs.
     * @link http://msdn.microsoft.com/en-us/library/dn277530(v=msads.100).aspx GetPlacementDetailsForUrls Response Object
     * 
     * @uses PlacementDetail
     * @used-by BingAdsCampaignManagementService::GetPlacementDetailsForUrls
     */
    final class GetPlacementDetailsForUrlsResponse
    {
        /**
         * A two-dimensional array of PlacementDetail objects that contains the identifier of the publisher website and the types and sizes of media that the publisher supports.
         * @var PlacementDetail[][]
         */
        public $PlacementDetails;
    }

    /**
     * Gets the remarketing lists that can be associated with entities in the specified account.
     * @link http://msdn.microsoft.com/en-us/library/mt735049(v=msads.100).aspx GetRemarketingLists Request Object
     * 
     * @uses RemarketingListAdditionalField
     * @used-by BingAdsCampaignManagementService::GetRemarketingLists
     */
    final class GetRemarketingListsRequest
    {
        /**
         * A maximum of 100 identifiers of the remarketing lists to get.
         * @var integer[]
         */
        public $RemarketingListIds;

        /**
         * The list of additional elements that you want included within each returned RemarketingList object.
         * @var RemarketingListAdditionalField
         */
        public $ReturnAdditionalFields;
    }

    /**
     * Gets the remarketing lists that can be associated with entities in the specified account.
     * @link http://msdn.microsoft.com/en-us/library/mt735049(v=msads.100).aspx GetRemarketingLists Response Object
     * 
     * @uses RemarketingList
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetRemarketingLists
     */
    final class GetRemarketingListsResponse
    {
        /**
         * An array of RemarketingList objects that corresponds directly to the remarketing list identifiers that you specified in the request.
         * @var RemarketingList[]
         */
        public $RemarketingLists;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets the shared entities such as negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743728(v=msads.100).aspx GetSharedEntitiesByAccountId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntitiesByAccountId
     */
    final class GetSharedEntitiesByAccountIdRequest
    {
        /**
         * The type of shared entity to get from the account's library.
         * @var string
         */
        public $SharedEntityType;
    }

    /**
     * Gets the shared entities such as negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743728(v=msads.100).aspx GetSharedEntitiesByAccountId Response Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::GetSharedEntitiesByAccountId
     */
    final class GetSharedEntitiesByAccountIdResponse
    {
        /**
         * The shared entities from the account's shared library, for example negative keyword lists.
         * @var SharedEntity[]
         */
        public $SharedEntities;
    }

    /**
     * Gets associations between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743771(v=msads.100).aspx GetSharedEntityAssociationsByEntityIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsByEntityIds
     */
    final class GetSharedEntityAssociationsByEntityIdsRequest
    {
        /**
         * An array of entity identifiers to return associations between a campaign and a shared entity such as a negative keyword list.
         * @var integer[]
         */
        public $EntityIds;

        /**
         * The type of entity corresponding to the specified EntityIds element.
         * @var string
         */
        public $EntityType;

        /**
         * The type of shared entity to get associations from the account's library.
         * @var string
         */
        public $SharedEntityType;
    }

    /**
     * Gets associations between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743771(v=msads.100).aspx GetSharedEntityAssociationsByEntityIds Response Object
     * 
     * @uses SharedEntityAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsByEntityIds
     */
    final class GetSharedEntityAssociationsByEntityIdsResponse
    {
        /**
         * An array of SharedEntityAssociation objects that corresponds directly to the entity identifiers that you specified in the request.
         * @var SharedEntityAssociation[]
         */
        public $Associations;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Gets associations between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743773(v=msads.100).aspx GetSharedEntityAssociationsBySharedEntityIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsBySharedEntityIds
     */
    final class GetSharedEntityAssociationsBySharedEntityIdsRequest
    {
        /**
         * The type of entity corresponding to the specified EntityIds element.
         * @var string
         */
        public $EntityType;

        /**
         * An array of shared entity identifiers to return associations between a campaign and a shared entity such as a negative keyword list.
         * @var integer[]
         */
        public $SharedEntityIds;

        /**
         * The type of shared entity to get associations from the account's library.
         * @var string
         */
        public $SharedEntityType;
    }

    /**
     * Gets associations between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743773(v=msads.100).aspx GetSharedEntityAssociationsBySharedEntityIds Response Object
     * 
     * @uses SharedEntityAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsBySharedEntityIds
     */
    final class GetSharedEntityAssociationsBySharedEntityIdsResponse
    {
        /**
         * An array of SharedEntityAssociation objects that corresponds directly to the shared entity identifiers that you specified in the request.
         * @var SharedEntityAssociation[]
         */
        public $Associations;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Retrieves all the website-placement bids from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277535(v=msads.100).aspx GetSitePlacementsByAdGroupId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSitePlacementsByAdGroupId
     */
    final class GetSitePlacementsByAdGroupIdRequest
    {
        /**
         * The identifier of the ad group that contains the website placement bids that will be retrieved.
         * @var integer
         */
        public $AdGroupId;
    }

    /**
     * Retrieves all the website-placement bids from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277535(v=msads.100).aspx GetSitePlacementsByAdGroupId Response Object
     * 
     * @uses SitePlacement
     * @used-by BingAdsCampaignManagementService::GetSitePlacementsByAdGroupId
     */
    final class GetSitePlacementsByAdGroupIdResponse
    {
        /**
         * An array of SitePlacement objects that was successfully retrieved.
         * @var SitePlacement[]
         */
        public $SitePlacements;
    }

    /**
     * Retrieves the specified website-placement bids from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277539(v=msads.100).aspx GetSitePlacementsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSitePlacementsByIds
     */
    final class GetSitePlacementsByIdsRequest
    {
        /**
         * The identifier of the ad group that contains the website placement bids to be retrieved.
         * @var integer
         */
        public $AdGroupId;

        /**
         * An array of identifiers that identifies the website placement bids to be retrieved.
         * @var integer[]
         */
        public $SitePlacementIds;
    }

    /**
     * Retrieves the specified website-placement bids from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277539(v=msads.100).aspx GetSitePlacementsByIds Response Object
     * 
     * @uses SitePlacement
     * @used-by BingAdsCampaignManagementService::GetSitePlacementsByIds
     */
    final class GetSitePlacementsByIdsResponse
    {
        /**
         * An array of SitePlacement objects that was successfully retrieved.
         * @var SitePlacement[]
         */
        public $SitePlacements;
    }

    /**
     * Retrieves detailed information about the targets that are associated with the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236297(v=msads.100).aspx GetTargetsByAdGroupIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetTargetsByAdGroupIds
     */
    final class GetTargetsByAdGroupIdsRequest
    {
        /**
         * A list of identifiers of the ad groups that contain the targets that you want to get.
         * @var integer[]
         */
        public $AdGroupIds;
    }

    /**
     * Retrieves detailed information about the targets that are associated with the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236297(v=msads.100).aspx GetTargetsByAdGroupIds Response Object
     * 
     * @uses BatchError
     * @uses Target
     * @used-by BingAdsCampaignManagementService::GetTargetsByAdGroupIds
     */
    final class GetTargetsByAdGroupIdsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;

        /**
         * An array of Target that corresponds directly to the ad group identifiers that you specified in the request.
         * @var Target[]
         */
        public $Targets;
    }

    /**
     * Retrieves detailed information about the targets that are associated with the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn236300(v=msads.100).aspx GetTargetsByCampaignIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetTargetsByCampaignIds
     */
    final class GetTargetsByCampaignIdsRequest
    {
        /**
         * A list of identifiers of the campaigns that contain the targets that you want to get.
         * @var integer[]
         */
        public $CampaignIds;
    }

    /**
     * Retrieves detailed information about the targets that are associated with the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn236300(v=msads.100).aspx GetTargetsByCampaignIds Response Object
     * 
     * @uses BatchError
     * @uses Target
     * @used-by BingAdsCampaignManagementService::GetTargetsByCampaignIds
     */
    final class GetTargetsByCampaignIdsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;

        /**
         * An array of Target that corresponds directly to the campaign identifiers that you specified in the request.
         * @var Target[]
         */
        public $Targets;
    }

    /**
     * Retrieves detailed information about the specified targets.
     * @link http://msdn.microsoft.com/en-us/library/dn236304(v=msads.100).aspx GetTargetsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetTargetsByIds
     */
    final class GetTargetsByIdsRequest
    {
        /**
         * A list of identifiers of the targets to get.
         * @var integer[]
         */
        public $TargetIds;
    }

    /**
     * Retrieves detailed information about the specified targets.
     * @link http://msdn.microsoft.com/en-us/library/dn236304(v=msads.100).aspx GetTargetsByIds Response Object
     * 
     * @uses Target
     * @used-by BingAdsCampaignManagementService::GetTargetsByIds
     */
    final class GetTargetsByIdsResponse
    {
        /**
         * An array of Target objects that contains information about the specified targets.
         * @var Target[]
         */
        public $Targets;
    }

    /**
     * Retrieves detailed information about all the targets in your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn236308(v=msads.100).aspx GetTargetsInfoFromLibrary Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetTargetsInfoFromLibrary
     */
    final class GetTargetsInfoFromLibraryRequest
    {
    }

    /**
     * Retrieves detailed information about all the targets in your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn236308(v=msads.100).aspx GetTargetsInfoFromLibrary Response Object
     * 
     * @uses TargetInfo
     * @used-by BingAdsCampaignManagementService::GetTargetsInfoFromLibrary
     */
    final class GetTargetsInfoFromLibraryResponse
    {
        /**
         * An array of TargetInfo objects that contain information about the targets in your library.
         * @var TargetInfo[]
         */
        public $TargetsInfo;
    }

    /**
     * Gets the specified Universal Event Tracking (UET) tags.
     * @link http://msdn.microsoft.com/en-us/library/mt759542(v=msads.100).aspx GetUetTagsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetUetTagsByIds
     */
    final class GetUetTagsByIdsRequest
    {
        /**
         * A maximum of 100 identifiers of the UET tags that you want to get.
         * @var integer[]
         */
        public $TagIds;
    }

    /**
     * Gets the specified Universal Event Tracking (UET) tags.
     * @link http://msdn.microsoft.com/en-us/library/mt759542(v=msads.100).aspx GetUetTagsByIds Response Object
     * 
     * @uses UetTag
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetUetTagsByIds
     */
    final class GetUetTagsByIdsResponse
    {
        /**
         * An array of UetTag objects that corresponds directly to the UET tag identifiers that you specified in the request.
         * @var UetTag[]
         */
        public $UetTags;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Associates the specified ad extensions with the respective campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn277532(v=msads.100).aspx SetAdExtensionsAssociations Request Object
     * 
     * @uses AdExtensionIdToEntityIdAssociation
     * @uses AssociationType
     * @used-by BingAdsCampaignManagementService::SetAdExtensionsAssociations
     */
    final class SetAdExtensionsAssociationsRequest
    {
        /**
         * The identifier of the account that owns the extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of ad extensions to associate with campaigns or ad groups.
         * @var AdExtensionIdToEntityIdAssociation[]
         */
        public $AdExtensionIdToEntityIdAssociations;

        /**
         * The type of all entities specified in the AdExtensionIdToEntityIdAssociations list.
         * @var AssociationType
         */
        public $AssociationType;
    }

    /**
     * Associates the specified ad extensions with the respective campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn277532(v=msads.100).aspx SetAdExtensionsAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetAdExtensionsAssociations
     */
    final class SetAdExtensionsAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Sets the negative site URLs of the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236317(v=msads.100).aspx SetNegativeSitesToAdGroups Request Object
     * 
     * @uses AdGroupNegativeSites
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToAdGroups
     */
    final class SetNegativeSitesToAdGroupsRequest
    {
        /**
         * The identifier of the campaign that contains the ad groups.
         * @var integer
         */
        public $CampaignId;

        /**
         * An array of AdGroupNegativeSites objects that identify the ad groups to update with the specified negative site URLs.
         * @var AdGroupNegativeSites[]
         */
        public $AdGroupNegativeSites;
    }

    /**
     * Sets the negative site URLs of the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236317(v=msads.100).aspx SetNegativeSitesToAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToAdGroups
     */
    final class SetNegativeSitesToAdGroupsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Sets the negative site URLs of the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn277504(v=msads.100).aspx SetNegativeSitesToCampaigns Request Object
     * 
     * @uses CampaignNegativeSites
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToCampaigns
     */
    final class SetNegativeSitesToCampaignsRequest
    {
        /**
         * The identifier of the account that contains the campaigns.
         * @var integer
         */
        public $AccountId;

        /**
         * An array of CampaignNegativeSites objects that identify the campaigns to update with the specified negative site URLs.
         * @var CampaignNegativeSites[]
         */
        public $CampaignNegativeSites;
    }

    /**
     * Sets the negative site URLs of the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn277504(v=msads.100).aspx SetNegativeSitesToCampaigns Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToCampaigns
     */
    final class SetNegativeSitesToCampaignsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Sets the association between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743780(v=msads.100).aspx SetSharedEntityAssociations Request Object
     * 
     * @uses SharedEntityAssociation
     * @used-by BingAdsCampaignManagementService::SetSharedEntityAssociations
     */
    final class SetSharedEntityAssociationsRequest
    {
        /**
         * An array of objects that associate a campaign with a shared entity such as a negative keyword list.
         * @var SharedEntityAssociation[]
         */
        public $Associations;
    }

    /**
     * Sets the association between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743780(v=msads.100).aspx SetSharedEntityAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetSharedEntityAssociations
     */
    final class SetSharedEntityAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Associates the specified target with the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277508(v=msads.100).aspx SetTargetToAdGroup Request Object
     * 
     * @used-by BingAdsCampaignManagementService::SetTargetToAdGroup
     */
    final class SetTargetToAdGroupRequest
    {
        /**
         * The identifier of the ad group to associate with the target.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The identifier of the target to associate with the ad group.
         * @var integer
         */
        public $TargetId;

        /**
         * If the specified AdGroupId is already associated with a target, this element determines whether to replace the existing association between the ad group and target with the specified TargetId.
         * @var boolean
         */
        public $ReplaceAssociation;
    }

    /**
     * Associates the specified target with the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277508(v=msads.100).aspx SetTargetToAdGroup Response Object
     * 
     * @used-by BingAdsCampaignManagementService::SetTargetToAdGroup
     */
    final class SetTargetToAdGroupResponse
    {
    }

    /**
     * Associates the specified target with the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277512(v=msads.100).aspx SetTargetToCampaign Request Object
     * 
     * @used-by BingAdsCampaignManagementService::SetTargetToCampaign
     */
    final class SetTargetToCampaignRequest
    {
        /**
         * The identifier of the campaign to associate with the target.
         * @var integer
         */
        public $CampaignId;

        /**
         * The identifier of the target to associate with the campaign.
         * @var integer
         */
        public $TargetId;

        /**
         * If the specified CampaignId is already associated with a target, this element determines whether to replace the existing association between the campaign and target with the specified TargetId.
         * @var boolean
         */
        public $ReplaceAssociation;
    }

    /**
     * Associates the specified target with the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277512(v=msads.100).aspx SetTargetToCampaign Response Object
     * 
     * @used-by BingAdsCampaignManagementService::SetTargetToCampaign
     */
    final class SetTargetToCampaignResponse
    {
    }

    /**
     * Updates one or more ad extensions within an account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277522(v=msads.100).aspx UpdateAdExtensions Request Object
     * 
     * @uses AdExtension
     * @used-by BingAdsCampaignManagementService::UpdateAdExtensions
     */
    final class UpdateAdExtensionsRequest
    {
        /**
         * The identifier of the account which contains the extensions.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of ad extensions of any type, to update within the account.
         * @var AdExtension[]
         */
        public $AdExtensions;
    }

    /**
     * Updates one or more ad extensions within an account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277522(v=msads.100).aspx UpdateAdExtensions Response Object
     * 
     * @used-by BingAdsCampaignManagementService::UpdateAdExtensions
     */
    final class UpdateAdExtensionsResponse
    {
    }

    /**
     * Updates one or more ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn277527(v=msads.100).aspx UpdateAdGroupCriterions Request Object
     * 
     * @uses AdGroupCriterion
     * @uses CriterionType
     * @used-by BingAdsCampaignManagementService::UpdateAdGroupCriterions
     */
    final class UpdateAdGroupCriterionsRequest
    {
        /**
         * The identifier of the account that owns the criterions to update.
         * @var integer
         */
        public $AccountId;

        /**
         * The list of criterions to update.
         * @var AdGroupCriterion[]
         */
        public $AdGroupCriterions;

        /**
         * The type of ad group criterion to update, for example Webpage.
         * @var CriterionType
         */
        public $CriterionType;
    }

    /**
     * Updates one or more ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn277527(v=msads.100).aspx UpdateAdGroupCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::UpdateAdGroupCriterions
     */
    final class UpdateAdGroupCriterionsResponse
    {
        /**
         * An array of BatchErrorCollection objects that contain details for any criterion that were not successfully updated.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }

    /**
     * Updates the properties of each specified ad group to remarketing list association.
     * @link http://msdn.microsoft.com/en-us/library/mt735052(v=msads.100).aspx UpdateAdGroupRemarketingListAssociations Request Object
     * 
     * @uses AdGroupRemarketingListAssociation
     * @used-by BingAdsCampaignManagementService::UpdateAdGroupRemarketingListAssociations
     */
    final class UpdateAdGroupRemarketingListAssociationsRequest
    {
        /**
         * The list of up to 1,000 ad group remarketing list associations to update.
         * @var AdGroupRemarketingListAssociation[]
         */
        public $AdGroupRemarketingListAssociations;
    }

    /**
     * Updates the properties of each specified ad group to remarketing list association.
     * @link http://msdn.microsoft.com/en-us/library/mt735052(v=msads.100).aspx UpdateAdGroupRemarketingListAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAdGroupRemarketingListAssociations
     */
    final class UpdateAdGroupRemarketingListAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Updates the specified ad groups in a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.100).aspx UpdateAdGroups Request Object
     * 
     * @uses AdGroup
     * @used-by BingAdsCampaignManagementService::UpdateAdGroups
     */
    final class UpdateAdGroupsRequest
    {
        /**
         * The identifier of the campaign that owns the ad groups to update.
         * @var integer
         */
        public $CampaignId;

        /**
         * An array that can contain a maximum of 1,000 AdGroup objects to update.
         * @var AdGroup[]
         */
        public $AdGroups;

        /**
         * Determines whether or not the service should use the NativeBidAdjustment element of each specified AdGroup during update.
         * @var boolean
         */
        public $UpdateNativeBidAdjustment;
    }

    /**
     * Updates the specified ad groups in a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.100).aspx UpdateAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAdGroups
     */
    final class UpdateAdGroupsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Updates the specified ads within a particular ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277531(v=msads.100).aspx UpdateAds Request Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::UpdateAds
     */
    final class UpdateAdsRequest
    {
        /**
         * The ID of the ad group that contains the ads to update.
         * @var integer
         */
        public $AdGroupId;

        /**
         * A list of ads to update.
         * @var Ad[]
         */
        public $Ads;
    }

    /**
     * Updates the specified ads within a particular ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277531(v=msads.100).aspx UpdateAds Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAds
     */
    final class UpdateAdsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Updates the specified budgets in the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750544(v=msads.100).aspx UpdateBudgets Request Object
     * 
     * @uses Budget
     * @used-by BingAdsCampaignManagementService::UpdateBudgets
     */
    final class UpdateBudgetsRequest
    {
        /**
         * An array of Budget objects to update in the account's shared budget library.
         * @var Budget[]
         */
        public $Budgets;
    }

    /**
     * Updates the specified budgets in the account's shared budget library.
     * @link http://msdn.microsoft.com/en-us/library/mt750544(v=msads.100).aspx UpdateBudgets Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateBudgets
     */
    final class UpdateBudgetsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Updates one or more campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913121(v=msads.100).aspx UpdateCampaignCriterions Request Object
     * 
     * @uses CampaignCriterion
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::UpdateCampaignCriterions
     */
    final class UpdateCampaignCriterionsRequest
    {
        /**
         * The list of up to 100 campaign criterions to update.
         * @var CampaignCriterion[]
         */
        public $CampaignCriterions;

        /**
         * The type of campaign criterion to update, for example ProductScope or Webpage.
         * @var CampaignCriterionType
         */
        public $CriterionType;
    }

    /**
     * Updates one or more campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913121(v=msads.100).aspx UpdateCampaignCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::UpdateCampaignCriterions
     */
    final class UpdateCampaignCriterionsResponse
    {
        /**
         * An array of BatchErrorCollection objects that contain details for any criterion that were not successfully updated.
         * @var BatchErrorCollection[]
         */
        public $NestedPartialErrors;
    }

    /**
     * Updates specified campaigns in a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn277536(v=msads.100).aspx UpdateCampaigns Request Object
     * 
     * @uses Campaign
     * @used-by BingAdsCampaignManagementService::UpdateCampaigns
     */
    final class UpdateCampaignsRequest
    {
        /**
         * The identifier of the account that contains the campaign to update.
         * @var integer
         */
        public $AccountId;

        /**
         * An array that can contain a maximum of 100 Campaign objects to update.
         * @var Campaign[]
         */
        public $Campaigns;
    }

    /**
     * Updates specified campaigns in a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn277536(v=msads.100).aspx UpdateCampaigns Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateCampaigns
     */
    final class UpdateCampaignsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Updates conversion goals within the account's shared conversion goal library.
     * @link http://msdn.microsoft.com/en-us/library/mt759544(v=msads.100).aspx UpdateConversionGoals Request Object
     * 
     * @uses ConversionGoal
     * @used-by BingAdsCampaignManagementService::UpdateConversionGoals
     */
    final class UpdateConversionGoalsRequest
    {
        /**
         * An array of ConversionGoal objects to update within the account's shared conversion goal library.
         * @var ConversionGoal[]
         */
        public $ConversionGoals;
    }

    /**
     * Updates conversion goals within the account's shared conversion goal library.
     * @link http://msdn.microsoft.com/en-us/library/mt759544(v=msads.100).aspx UpdateConversionGoals Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateConversionGoals
     */
    final class UpdateConversionGoalsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Updates the keywords within a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236295(v=msads.100).aspx UpdateKeywords Request Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::UpdateKeywords
     */
    final class UpdateKeywordsRequest
    {
        /**
         * The identifier of the ad group whose keywords will be updated.
         * @var integer
         */
        public $AdGroupId;

        /**
         * An array of Keyword objects that contains the updated keyword information.
         * @var Keyword[]
         */
        public $Keywords;
    }

    /**
     * Updates the keywords within a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236295(v=msads.100).aspx UpdateKeywords Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateKeywords
     */
    final class UpdateKeywordsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    final class UpdateRemarketingListsRequest
    {
        public $RemarketingLists;
    }

    final class UpdateRemarketingListsResponse
    {
        public $PartialErrors;
    }

    /**
     * Updates shared entities such as negative keyword lists within the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743732(v=msads.100).aspx UpdateSharedEntities Request Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::UpdateSharedEntities
     */
    final class UpdateSharedEntitiesRequest
    {
        /**
         * The shared entities to update within the account's shared library, for example negative keyword lists.
         * @var SharedEntity[]
         */
        public $SharedEntities;
    }

    /**
     * Updates shared entities such as negative keyword lists within the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743732(v=msads.100).aspx UpdateSharedEntities Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateSharedEntities
     */
    final class UpdateSharedEntitiesResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }

    /**
     * Updates one or more website-placement bids in an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236298(v=msads.100).aspx UpdateSitePlacements Request Object
     * 
     * @uses SitePlacement
     * @used-by BingAdsCampaignManagementService::UpdateSitePlacements
     */
    final class UpdateSitePlacementsRequest
    {
        /**
         * The identifier of the ad group that the placement bids to be updated belong to.
         * @var integer
         */
        public $AdGroupId;

        /**
         * An array of SitePlacement objects that contains the updated website placement bid information.
         * @var SitePlacement[]
         */
        public $SitePlacements;
    }

    /**
     * Updates one or more website-placement bids in an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236298(v=msads.100).aspx UpdateSitePlacements Response Object
     * 
     * @used-by BingAdsCampaignManagementService::UpdateSitePlacements
     */
    final class UpdateSitePlacementsResponse
    {
    }

    /**
     * Updates targets in your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn236301(v=msads.100).aspx UpdateTargetsInLibrary Request Object
     * 
     * @uses Target
     * @used-by BingAdsCampaignManagementService::UpdateTargetsInLibrary
     */
    final class UpdateTargetsInLibraryRequest
    {
        /**
         * An array of Target objects that contains the updated target information.
         * @var Target[]
         */
        public $Targets;
    }

    /**
     * Updates targets in your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn236301(v=msads.100).aspx UpdateTargetsInLibrary Response Object
     * 
     * @used-by BingAdsCampaignManagementService::UpdateTargetsInLibrary
     */
    final class UpdateTargetsInLibraryResponse
    {
    }

    /**
     * Updates the specified Universal Event Tracking (UET) tags.
     * @link http://msdn.microsoft.com/en-us/library/mt759543(v=msads.100).aspx UpdateUetTags Request Object
     * 
     * @uses UetTag
     * @used-by BingAdsCampaignManagementService::UpdateUetTags
     */
    final class UpdateUetTagsRequest
    {
        /**
         * An array of UetTag objects to update within the customer's shared UET tag library.
         * @var UetTag[]
         */
        public $UetTags;
    }

    /**
     * Updates the specified Universal Event Tracking (UET) tags.
     * @link http://msdn.microsoft.com/en-us/library/mt759543(v=msads.100).aspx UpdateUetTags Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateUetTags
     */
    final class UpdateUetTagsResponse
    {
        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}

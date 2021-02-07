<?php

namespace Hborras\TwitterAdsSDK\TwitterAds;

/**
 * Class Enumerations
 * @package Hborras\TwitterAdsSDK\TwitterAds
 */
class Enumerations
{
    const BID_UNIT_APP_CLICK   = 'APP_CLICK';
    const BID_UNIT_APP_INSTALL = 'APP_INSTALL';
    const BID_UNIT_ENGAGEMENT  = 'ENGAGEMENT';
    const BID_UNIT_FOLLOW      = 'FOLLOW';
    const BID_UNIT_LEAD        = 'LEAD';
    const BID_UNIT_LINK_CLICK  = 'LINK_CLICK';
    const BID_UNIT_VIEW        = 'VIEW';

    const CHARGE_BY_APP_CLICK   = 'APP_CLICK';
    const CHARGE_BY_APP_INSTALL = 'APP_INSTALL';
    const CHARGE_BY_ENGAGEMENT  = 'ENGAGEMENT';
    const CHARGE_BY_FOLLOW      = 'FOLLOW';
    const CHARGE_BY_LEAD        = 'LEAD';
    const CHARGE_BY_LINK_CLICK  = 'LINK_CLICK';
    const CHARGE_BY_VIEW        = 'VIEW';

    const OPTIMIZATIONS_DEFAULT             = 'DEFAULT';
    const OPTIMIZATIONS_WEBSITE_CONVERSIONS = 'WEBSITE_CONVERSIONS';

    const PRODUCT_PROMOTED_ACCOUNT = 'PROMOTED_ACCOUNT';
    const PRODUCT_PROMOTED_TWEETS  = 'PROMOTED_TWEETS';

    const PLACEMENT_ALL_ON_TWITTER     = 'ALL_ON_TWITTER';
    const PLACEMENT_TWITTER_SEARCH     = 'TWITTER_SEARCH';
    const PLACEMENT_TWITTER_TIMELINE   = 'TWITTER_TIMELINE';
    const PLACEMENT_PUBLISHER_NETWORK  = 'PUBLISHER_NETWORK';
    const PLACEMENT_TAP_FULL           = 'TAP_FULL';
    const PLACEMENT_TAP_FULL_LANDSCAPE = 'TAP_FULL_LANDSCAPE';
    const PLACEMENT_TAP_BANNER         = 'TAP_BANNER';
    const PLACEMENT_TAP_NATIVE         = 'TAP_NATIVE';
    const PLACEMENT_TAP_MRECT          = 'TAP_MRECT';

    const OBJECTIVE_APP_ENGAGEMENTS = 'APP_ENGAGEMENTS';
    const OBJECTIVE_APP_INSTALLS    = 'APP_INSTALLS';
    /** @deprecated  use OBJECT_REACH instead */
    const OBJECTIVE_AWARENESS       = 'REACH';
    const OBJECTIVE_REACH           = 'REACH';
    const OBJECTIVE_FOLLOWERS       = 'FOLLOWERS';
    const OBJECTIVE_LEAD_GENERATION = 'LEAD_GENERATION';
    /** @deprecated use  OBJECTIVE_ENGAGEMENTS instead */
    const OBJECTIVE_TWEET_ENGAGEMENTS   = 'ENGAGEMENTS';
    const OBJECTIVE_ENGAGEMENTS         = 'ENGAGEMENTS';
    const OBJECTIVE_VIDEO_VIEWS_MIDROLL = 'VIDEO_VIEWS_MIDROLL';
    /** @deprecated  use OBJECTIVE_PREROLL_VIEWS instead */
    const OBJECTIVE_VIDEO_VIEWS_PREROLL = 'VIDEO_VIEWS_PREROLL';
    const OBJECTIVE_PREROLL_VIEWS       = 'PREROLL_VIEWS';
    const OBJECTIVE_VIDEO_VIEWS         = 'VIDEO_VIEWS';
    const OBJECTIVE_WEBSITE_CONVERSIONS = 'WEBSITE_CONVERSIONS';
    const OBJECTIVE_WEBSITE_CLICKS      = 'WEBSITE_CLICKS';
    const OBJECTIVE_CUSTOM              = 'CUSTOM';

    const GRANULARITY_HOUR  = 'HOUR';
    const GRANULARITY_DAY   = 'DAY';
    const GRANULARITY_TOTAL = 'TOTAL';
}

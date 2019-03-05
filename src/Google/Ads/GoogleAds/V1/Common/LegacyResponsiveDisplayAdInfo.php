<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A legacy responsive display ad. Ads of this type are labeled 'Responsive ads'
 * in the Google Ads UI.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.LegacyResponsiveDisplayAdInfo</code>
 */
class LegacyResponsiveDisplayAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The short version of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue short_headline = 1;</code>
     */
    private $short_headline = null;
    /**
     * The long version of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_headline = 2;</code>
     */
    private $long_headline = null;
    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 3;</code>
     */
    private $description = null;
    /**
     * The business name in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 4;</code>
     */
    private $business_name = null;
    /**
     * Advertiser's consent to allow flexible color. When true, the ad may be
     * served with different color if necessary. When false, the ad will be served
     * with the specified colors or a neutral color.
     * The default value is true.
     * Must be true if main_color and accent_color are not set.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue allow_flexible_color = 5;</code>
     */
    private $allow_flexible_color = null;
    /**
     * The accent color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue accent_color = 6;</code>
     */
    private $accent_color = null;
    /**
     * The main color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue main_color = 7;</code>
     */
    private $main_color = null;
    /**
     * The call-to-action text for the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_to_action_text = 8;</code>
     */
    private $call_to_action_text = null;
    /**
     * The MediaFile resource name of the logo image used in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue logo_image = 9;</code>
     */
    private $logo_image = null;
    /**
     * The MediaFile resource name of the square logo image used in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue square_logo_image = 10;</code>
     */
    private $square_logo_image = null;
    /**
     * The MediaFile resource name of the marketing image used in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue marketing_image = 11;</code>
     */
    private $marketing_image = null;
    /**
     * The MediaFile resource name of the square marketing image used in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue square_marketing_image = 12;</code>
     */
    private $square_marketing_image = null;
    /**
     * Specifies which format the ad will be served in. Default is ALL_FORMATS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSetting format_setting = 13;</code>
     */
    private $format_setting = 0;
    /**
     * Prefix before price. E.g. 'as low as'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue price_prefix = 14;</code>
     */
    private $price_prefix = null;
    /**
     * Promotion text used for dyanmic formats of responsive ads. For example
     * 'Free two-day shipping'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promo_text = 15;</code>
     */
    private $promo_text = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $short_headline
     *           The short version of the ad's headline.
     *     @type \Google\Protobuf\StringValue $long_headline
     *           The long version of the ad's headline.
     *     @type \Google\Protobuf\StringValue $description
     *           The description of the ad.
     *     @type \Google\Protobuf\StringValue $business_name
     *           The business name in the ad.
     *     @type \Google\Protobuf\BoolValue $allow_flexible_color
     *           Advertiser's consent to allow flexible color. When true, the ad may be
     *           served with different color if necessary. When false, the ad will be served
     *           with the specified colors or a neutral color.
     *           The default value is true.
     *           Must be true if main_color and accent_color are not set.
     *     @type \Google\Protobuf\StringValue $accent_color
     *           The accent color of the ad in hexadecimal, e.g. #ffffff for white.
     *           If one of main_color and accent_color is set, the other is required as
     *           well.
     *     @type \Google\Protobuf\StringValue $main_color
     *           The main color of the ad in hexadecimal, e.g. #ffffff for white.
     *           If one of main_color and accent_color is set, the other is required as
     *           well.
     *     @type \Google\Protobuf\StringValue $call_to_action_text
     *           The call-to-action text for the ad.
     *     @type \Google\Protobuf\StringValue $logo_image
     *           The MediaFile resource name of the logo image used in the ad.
     *     @type \Google\Protobuf\StringValue $square_logo_image
     *           The MediaFile resource name of the square logo image used in the ad.
     *     @type \Google\Protobuf\StringValue $marketing_image
     *           The MediaFile resource name of the marketing image used in the ad.
     *     @type \Google\Protobuf\StringValue $square_marketing_image
     *           The MediaFile resource name of the square marketing image used in the ad.
     *     @type int $format_setting
     *           Specifies which format the ad will be served in. Default is ALL_FORMATS.
     *     @type \Google\Protobuf\StringValue $price_prefix
     *           Prefix before price. E.g. 'as low as'.
     *     @type \Google\Protobuf\StringValue $promo_text
     *           Promotion text used for dyanmic formats of responsive ads. For example
     *           'Free two-day shipping'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The short version of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue short_headline = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getShortHeadline()
    {
        return $this->short_headline;
    }

    /**
     * The short version of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue short_headline = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setShortHeadline($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->short_headline = $var;

        return $this;
    }

    /**
     * The long version of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_headline = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLongHeadline()
    {
        return $this->long_headline;
    }

    /**
     * The long version of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_headline = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLongHeadline($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->long_headline = $var;

        return $this;
    }

    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description = $var;

        return $this;
    }

    /**
     * The business name in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getBusinessName()
    {
        return $this->business_name;
    }

    /**
     * The business name in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setBusinessName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->business_name = $var;

        return $this;
    }

    /**
     * Advertiser's consent to allow flexible color. When true, the ad may be
     * served with different color if necessary. When false, the ad will be served
     * with the specified colors or a neutral color.
     * The default value is true.
     * Must be true if main_color and accent_color are not set.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue allow_flexible_color = 5;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getAllowFlexibleColor()
    {
        return $this->allow_flexible_color;
    }

    /**
     * Advertiser's consent to allow flexible color. When true, the ad may be
     * served with different color if necessary. When false, the ad will be served
     * with the specified colors or a neutral color.
     * The default value is true.
     * Must be true if main_color and accent_color are not set.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue allow_flexible_color = 5;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setAllowFlexibleColor($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->allow_flexible_color = $var;

        return $this;
    }

    /**
     * The accent color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue accent_color = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAccentColor()
    {
        return $this->accent_color;
    }

    /**
     * The accent color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue accent_color = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAccentColor($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->accent_color = $var;

        return $this;
    }

    /**
     * The main color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue main_color = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMainColor()
    {
        return $this->main_color;
    }

    /**
     * The main color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue main_color = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMainColor($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->main_color = $var;

        return $this;
    }

    /**
     * The call-to-action text for the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_to_action_text = 8;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCallToActionText()
    {
        return $this->call_to_action_text;
    }

    /**
     * The call-to-action text for the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_to_action_text = 8;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCallToActionText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->call_to_action_text = $var;

        return $this;
    }

    /**
     * The MediaFile resource name of the logo image used in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue logo_image = 9;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLogoImage()
    {
        return $this->logo_image;
    }

    /**
     * The MediaFile resource name of the logo image used in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue logo_image = 9;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLogoImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->logo_image = $var;

        return $this;
    }

    /**
     * The MediaFile resource name of the square logo image used in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue square_logo_image = 10;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSquareLogoImage()
    {
        return $this->square_logo_image;
    }

    /**
     * The MediaFile resource name of the square logo image used in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue square_logo_image = 10;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSquareLogoImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->square_logo_image = $var;

        return $this;
    }

    /**
     * The MediaFile resource name of the marketing image used in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue marketing_image = 11;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMarketingImage()
    {
        return $this->marketing_image;
    }

    /**
     * The MediaFile resource name of the marketing image used in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue marketing_image = 11;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMarketingImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->marketing_image = $var;

        return $this;
    }

    /**
     * The MediaFile resource name of the square marketing image used in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue square_marketing_image = 12;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSquareMarketingImage()
    {
        return $this->square_marketing_image;
    }

    /**
     * The MediaFile resource name of the square marketing image used in the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue square_marketing_image = 12;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSquareMarketingImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->square_marketing_image = $var;

        return $this;
    }

    /**
     * Specifies which format the ad will be served in. Default is ALL_FORMATS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSetting format_setting = 13;</code>
     * @return int
     */
    public function getFormatSetting()
    {
        return $this->format_setting;
    }

    /**
     * Specifies which format the ad will be served in. Default is ALL_FORMATS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSetting format_setting = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setFormatSetting($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\DisplayAdFormatSettingEnum_DisplayAdFormatSetting::class);
        $this->format_setting = $var;

        return $this;
    }

    /**
     * Prefix before price. E.g. 'as low as'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue price_prefix = 14;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPricePrefix()
    {
        return $this->price_prefix;
    }

    /**
     * Prefix before price. E.g. 'as low as'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue price_prefix = 14;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPricePrefix($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->price_prefix = $var;

        return $this;
    }

    /**
     * Promotion text used for dyanmic formats of responsive ads. For example
     * 'Free two-day shipping'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promo_text = 15;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPromoText()
    {
        return $this->promo_text;
    }

    /**
     * Promotion text used for dyanmic formats of responsive ads. For example
     * 'Free two-day shipping'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promo_text = 15;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPromoText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->promo_text = $var;

        return $this;
    }

}

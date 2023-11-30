<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/feed_placeholder_view.proto

namespace Google\Ads\GoogleAds\V15\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A feed placeholder view.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.resources.FeedPlaceholderView</code>
 */
class FeedPlaceholderView extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the feed placeholder view.
     * Feed placeholder view resource names have the form:
     * `customers/{customer_id}/feedPlaceholderViews/{placeholder_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The placeholder type of the feed placeholder view.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.PlaceholderTypeEnum.PlaceholderType placeholder_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $placeholder_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the feed placeholder view.
     *           Feed placeholder view resource names have the form:
     *           `customers/{customer_id}/feedPlaceholderViews/{placeholder_type}`
     *     @type int $placeholder_type
     *           Output only. The placeholder type of the feed placeholder view.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Resources\FeedPlaceholderView::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the feed placeholder view.
     * Feed placeholder view resource names have the form:
     * `customers/{customer_id}/feedPlaceholderViews/{placeholder_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the feed placeholder view.
     * Feed placeholder view resource names have the form:
     * `customers/{customer_id}/feedPlaceholderViews/{placeholder_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The placeholder type of the feed placeholder view.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.PlaceholderTypeEnum.PlaceholderType placeholder_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPlaceholderType()
    {
        return $this->placeholder_type;
    }

    /**
     * Output only. The placeholder type of the feed placeholder view.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.PlaceholderTypeEnum.PlaceholderType placeholder_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPlaceholderType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\PlaceholderTypeEnum\PlaceholderType::class);
        $this->placeholder_type = $var;

        return $this;
    }

}

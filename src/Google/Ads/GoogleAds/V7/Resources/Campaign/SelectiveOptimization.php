<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/resources/campaign.proto

namespace Google\Ads\GoogleAds\V7\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Selective optimization setting for this campaign, which includes a set of
 * conversion actions to optimize this campaign towards.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.resources.Campaign.SelectiveOptimization</code>
 */
class SelectiveOptimization extends \Google\Protobuf\Internal\Message
{
    /**
     * The selected set of conversion actions for optimizing this campaign.
     *
     * Generated from protobuf field <code>repeated string conversion_actions = 2 [(.google.api.resource_reference) = {</code>
     */
    private $conversion_actions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $conversion_actions
     *           The selected set of conversion actions for optimizing this campaign.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * The selected set of conversion actions for optimizing this campaign.
     *
     * Generated from protobuf field <code>repeated string conversion_actions = 2 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConversionActions()
    {
        return $this->conversion_actions;
    }

    /**
     * The selected set of conversion actions for optimizing this campaign.
     *
     * Generated from protobuf field <code>repeated string conversion_actions = 2 [(.google.api.resource_reference) = {</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConversionActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->conversion_actions = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SelectiveOptimization::class, \Google\Ads\GoogleAds\V7\Resources\Campaign_SelectiveOptimization::class);

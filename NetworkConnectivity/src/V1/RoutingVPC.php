<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RoutingVPC contains information about the VPC networks that are associated
 * with a hub's spokes.
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.RoutingVPC</code>
 */
class RoutingVPC extends \Google\Protobuf\Internal\Message
{
    /**
     * The URI of the VPC network.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.resource_reference) = {</code>
     */
    private $uri = '';
    /**
     * Output only. If true, indicates that this VPC network is currently associated with
     * spokes that use the data transfer feature (spokes where the
     * site_to_site_data_transfer field is set to true). If you create new spokes
     * that use data transfer, they must be associated with this VPC network. At
     * most, one VPC network will have this field set to true.
     *
     * Generated from protobuf field <code>bool required_for_new_site_to_site_data_transfer_spokes = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $required_for_new_site_to_site_data_transfer_spokes = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uri
     *           The URI of the VPC network.
     *     @type bool $required_for_new_site_to_site_data_transfer_spokes
     *           Output only. If true, indicates that this VPC network is currently associated with
     *           spokes that use the data transfer feature (spokes where the
     *           site_to_site_data_transfer field is set to true). If you create new spokes
     *           that use data transfer, they must be associated with this VPC network. At
     *           most, one VPC network will have this field set to true.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * The URI of the VPC network.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * The URI of the VPC network.
     *
     * Generated from protobuf field <code>string uri = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->uri = $var;

        return $this;
    }

    /**
     * Output only. If true, indicates that this VPC network is currently associated with
     * spokes that use the data transfer feature (spokes where the
     * site_to_site_data_transfer field is set to true). If you create new spokes
     * that use data transfer, they must be associated with this VPC network. At
     * most, one VPC network will have this field set to true.
     *
     * Generated from protobuf field <code>bool required_for_new_site_to_site_data_transfer_spokes = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getRequiredForNewSiteToSiteDataTransferSpokes()
    {
        return $this->required_for_new_site_to_site_data_transfer_spokes;
    }

    /**
     * Output only. If true, indicates that this VPC network is currently associated with
     * spokes that use the data transfer feature (spokes where the
     * site_to_site_data_transfer field is set to true). If you create new spokes
     * that use data transfer, they must be associated with this VPC network. At
     * most, one VPC network will have this field set to true.
     *
     * Generated from protobuf field <code>bool required_for_new_site_to_site_data_transfer_spokes = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setRequiredForNewSiteToSiteDataTransferSpokes($var)
    {
        GPBUtil::checkBool($var);
        $this->required_for_new_site_to_site_data_transfer_spokes = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1\BigQueryDestinationConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single target dataset to which all data will be streamed.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.BigQueryDestinationConfig.SingleTargetDataset</code>
 */
class SingleTargetDataset extends \Google\Protobuf\Internal\Message
{
    /**
     * The dataset ID of the target dataset.
     *
     * Generated from protobuf field <code>string dataset_id = 1;</code>
     */
    private $dataset_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset_id
     *           The dataset ID of the target dataset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The dataset ID of the target dataset.
     *
     * Generated from protobuf field <code>string dataset_id = 1;</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * The dataset ID of the target dataset.
     *
     * Generated from protobuf field <code>string dataset_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;

        return $this;
    }

}



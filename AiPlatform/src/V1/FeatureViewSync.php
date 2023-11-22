<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/feature_view_sync.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FeatureViewSync is a representation of sync operation which copies data from
 * data source to Feature View in Online Store.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeatureViewSync</code>
 */
class FeatureViewSync extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Name of the FeatureViewSync. Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}/featureViewSyncs/{feature_view_sync}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. Time when this FeatureViewSync is created. Creation of a
     * FeatureViewSync means that the job is pending / waiting for sufficient
     * resources but may not have started the actual data transfer yet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Time when this FeatureViewSync is finished.
     *
     * Generated from protobuf field <code>.google.type.Interval run_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $run_time = null;
    /**
     * Output only. Final status of the FeatureViewSync.
     *
     * Generated from protobuf field <code>.google.rpc.Status final_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $final_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Name of the FeatureViewSync. Format:
     *           `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}/featureViewSyncs/{feature_view_sync}`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when this FeatureViewSync is created. Creation of a
     *           FeatureViewSync means that the job is pending / waiting for sufficient
     *           resources but may not have started the actual data transfer yet.
     *     @type \Google\Type\Interval $run_time
     *           Output only. Time when this FeatureViewSync is finished.
     *     @type \Google\Rpc\Status $final_status
     *           Output only. Final status of the FeatureViewSync.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeatureViewSync::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Name of the FeatureViewSync. Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}/featureViewSyncs/{feature_view_sync}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Name of the FeatureViewSync. Format:
     * `projects/{project}/locations/{location}/featureOnlineStores/{feature_online_store}/featureViews/{feature_view}/featureViewSyncs/{feature_view_sync}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Time when this FeatureViewSync is created. Creation of a
     * FeatureViewSync means that the job is pending / waiting for sufficient
     * resources but may not have started the actual data transfer yet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time when this FeatureViewSync is created. Creation of a
     * FeatureViewSync means that the job is pending / waiting for sufficient
     * resources but may not have started the actual data transfer yet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Time when this FeatureViewSync is finished.
     *
     * Generated from protobuf field <code>.google.type.Interval run_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Type\Interval|null
     */
    public function getRunTime()
    {
        return $this->run_time;
    }

    public function hasRunTime()
    {
        return isset($this->run_time);
    }

    public function clearRunTime()
    {
        unset($this->run_time);
    }

    /**
     * Output only. Time when this FeatureViewSync is finished.
     *
     * Generated from protobuf field <code>.google.type.Interval run_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Type\Interval $var
     * @return $this
     */
    public function setRunTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Interval::class);
        $this->run_time = $var;

        return $this;
    }

    /**
     * Output only. Final status of the FeatureViewSync.
     *
     * Generated from protobuf field <code>.google.rpc.Status final_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status|null
     */
    public function getFinalStatus()
    {
        return $this->final_status;
    }

    public function hasFinalStatus()
    {
        return isset($this->final_status);
    }

    public function clearFinalStatus()
    {
        unset($this->final_status);
    }

    /**
     * Output only. Final status of the FeatureViewSync.
     *
     * Generated from protobuf field <code>.google.rpc.Status final_status = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setFinalStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->final_status = $var;

        return $this;
    }

}


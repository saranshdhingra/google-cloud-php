<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/dataflow/v1beta3/jobs.proto

namespace Google\Cloud\Dataflow\V1beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for a Cloud Bigtable connector used by the job.
 *
 * Generated from protobuf message <code>google.dataflow.v1beta3.BigTableIODetails</code>
 */
class BigTableIODetails extends \Google\Protobuf\Internal\Message
{
    /**
     * ProjectId accessed in the connection.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * InstanceId accessed in the connection.
     *
     * Generated from protobuf field <code>string instance_id = 2;</code>
     */
    private $instance_id = '';
    /**
     * TableId accessed in the connection.
     *
     * Generated from protobuf field <code>string table_id = 3;</code>
     */
    private $table_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           ProjectId accessed in the connection.
     *     @type string $instance_id
     *           InstanceId accessed in the connection.
     *     @type string $table_id
     *           TableId accessed in the connection.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Dataflow\V1Beta3\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * ProjectId accessed in the connection.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * ProjectId accessed in the connection.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * InstanceId accessed in the connection.
     *
     * Generated from protobuf field <code>string instance_id = 2;</code>
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     * InstanceId accessed in the connection.
     *
     * Generated from protobuf field <code>string instance_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_id = $var;

        return $this;
    }

    /**
     * TableId accessed in the connection.
     *
     * Generated from protobuf field <code>string table_id = 3;</code>
     * @return string
     */
    public function getTableId()
    {
        return $this->table_id;
    }

    /**
     * TableId accessed in the connection.
     *
     * Generated from protobuf field <code>string table_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTableId($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_id = $var;

        return $this;
    }

}


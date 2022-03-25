<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.RegionInstanceGroupManagersDeleteInstancesRequest</code>
 */
class RegionInstanceGroupManagersDeleteInstancesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The URLs of one or more instances to delete. This can be a full URL or a partial URL, such as zones/[ZONE]/instances/[INSTANCE_NAME].
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     */
    private $instances;
    /**
     * Specifies whether the request should proceed despite the inclusion of instances that are not members of the group or that are already in the process of being deleted or abandoned. If this field is set to `false` and such an instance is specified in the request, the operation fails. The operation always fails if the request contains a malformed instance URL or a reference to an instance that exists in a zone or region other than the group's zone or region.
     *
     * Generated from protobuf field <code>optional bool skip_instances_on_validation_error = 40631073;</code>
     */
    private $skip_instances_on_validation_error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $instances
     *           The URLs of one or more instances to delete. This can be a full URL or a partial URL, such as zones/[ZONE]/instances/[INSTANCE_NAME].
     *     @type bool $skip_instances_on_validation_error
     *           Specifies whether the request should proceed despite the inclusion of instances that are not members of the group or that are already in the process of being deleted or abandoned. If this field is set to `false` and such an instance is specified in the request, the operation fails. The operation always fails if the request contains a malformed instance URL or a reference to an instance that exists in a zone or region other than the group's zone or region.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The URLs of one or more instances to delete. This can be a full URL or a partial URL, such as zones/[ZONE]/instances/[INSTANCE_NAME].
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * The URLs of one or more instances to delete. This can be a full URL or a partial URL, such as zones/[ZONE]/instances/[INSTANCE_NAME].
     *
     * Generated from protobuf field <code>repeated string instances = 29097598;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->instances = $arr;

        return $this;
    }

    /**
     * Specifies whether the request should proceed despite the inclusion of instances that are not members of the group or that are already in the process of being deleted or abandoned. If this field is set to `false` and such an instance is specified in the request, the operation fails. The operation always fails if the request contains a malformed instance URL or a reference to an instance that exists in a zone or region other than the group's zone or region.
     *
     * Generated from protobuf field <code>optional bool skip_instances_on_validation_error = 40631073;</code>
     * @return bool
     */
    public function getSkipInstancesOnValidationError()
    {
        return isset($this->skip_instances_on_validation_error) ? $this->skip_instances_on_validation_error : false;
    }

    public function hasSkipInstancesOnValidationError()
    {
        return isset($this->skip_instances_on_validation_error);
    }

    public function clearSkipInstancesOnValidationError()
    {
        unset($this->skip_instances_on_validation_error);
    }

    /**
     * Specifies whether the request should proceed despite the inclusion of instances that are not members of the group or that are already in the process of being deleted or abandoned. If this field is set to `false` and such an instance is specified in the request, the operation fails. The operation always fails if the request contains a malformed instance URL or a reference to an instance that exists in a zone or region other than the group's zone or region.
     *
     * Generated from protobuf field <code>optional bool skip_instances_on_validation_error = 40631073;</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipInstancesOnValidationError($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_instances_on_validation_error = $var;

        return $this;
    }

}


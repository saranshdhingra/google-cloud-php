<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for RegionInstanceGroupManagers.ApplyUpdatesToInstances. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ApplyUpdatesToInstancesRegionInstanceGroupManagerRequest</code>
 */
class ApplyUpdatesToInstancesRegionInstanceGroupManagerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the managed instance group, should conform to RFC1035.
     *
     * Generated from protobuf field <code>string instance_group_manager = 249363395 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance_group_manager = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * Name of the region scoping this request, should conform to RFC1035.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     */
    private $region = '';
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RegionInstanceGroupManagersApplyUpdatesRequest region_instance_group_managers_apply_updates_request_resource = 76248318 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region_instance_group_managers_apply_updates_request_resource = null;

    /**
     * @param string                                                                  $project                                                Project ID for this request.
     * @param string                                                                  $region                                                 Name of the region scoping this request, should conform to RFC1035.
     * @param string                                                                  $instanceGroupManager                                   The name of the managed instance group, should conform to RFC1035.
     * @param \Google\Cloud\Compute\V1\RegionInstanceGroupManagersApplyUpdatesRequest $regionInstanceGroupManagersApplyUpdatesRequestResource The body resource for this request
     *
     * @return \Google\Cloud\Compute\V1\ApplyUpdatesToInstancesRegionInstanceGroupManagerRequest
     *
     * @experimental
     */
    public static function build(string $project, string $region, string $instanceGroupManager, \Google\Cloud\Compute\V1\RegionInstanceGroupManagersApplyUpdatesRequest $regionInstanceGroupManagersApplyUpdatesRequestResource): self
    {
        return (new self())
            ->setProject($project)
            ->setRegion($region)
            ->setInstanceGroupManager($instanceGroupManager)
            ->setRegionInstanceGroupManagersApplyUpdatesRequestResource($regionInstanceGroupManagersApplyUpdatesRequestResource);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_group_manager
     *           The name of the managed instance group, should conform to RFC1035.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $region
     *           Name of the region scoping this request, should conform to RFC1035.
     *     @type \Google\Cloud\Compute\V1\RegionInstanceGroupManagersApplyUpdatesRequest $region_instance_group_managers_apply_updates_request_resource
     *           The body resource for this request
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the managed instance group, should conform to RFC1035.
     *
     * Generated from protobuf field <code>string instance_group_manager = 249363395 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstanceGroupManager()
    {
        return $this->instance_group_manager;
    }

    /**
     * The name of the managed instance group, should conform to RFC1035.
     *
     * Generated from protobuf field <code>string instance_group_manager = 249363395 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceGroupManager($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_group_manager = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Name of the region scoping this request, should conform to RFC1035.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Name of the region scoping this request, should conform to RFC1035.
     *
     * Generated from protobuf field <code>string region = 138946292 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "region"];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RegionInstanceGroupManagersApplyUpdatesRequest region_instance_group_managers_apply_updates_request_resource = 76248318 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\RegionInstanceGroupManagersApplyUpdatesRequest|null
     */
    public function getRegionInstanceGroupManagersApplyUpdatesRequestResource()
    {
        return $this->region_instance_group_managers_apply_updates_request_resource;
    }

    public function hasRegionInstanceGroupManagersApplyUpdatesRequestResource()
    {
        return isset($this->region_instance_group_managers_apply_updates_request_resource);
    }

    public function clearRegionInstanceGroupManagersApplyUpdatesRequestResource()
    {
        unset($this->region_instance_group_managers_apply_updates_request_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RegionInstanceGroupManagersApplyUpdatesRequest region_instance_group_managers_apply_updates_request_resource = 76248318 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\RegionInstanceGroupManagersApplyUpdatesRequest $var
     * @return $this
     */
    public function setRegionInstanceGroupManagersApplyUpdatesRequestResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\RegionInstanceGroupManagersApplyUpdatesRequest::class);
        $this->region_instance_group_managers_apply_updates_request_resource = $var;

        return $this;
    }

}


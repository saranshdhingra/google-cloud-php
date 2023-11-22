<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/filestore/v1/cloud_filestore_service.proto

namespace Google\Cloud\Filestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RevertInstanceRequest reverts the given instance's file share to the
 * specified snapshot.
 *
 * Generated from protobuf message <code>google.cloud.filestore.v1.RevertInstanceRequest</code>
 */
class RevertInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     * `projects/{project_id}/locations/{location_id}/instances/{instance_id}`.
     * The resource name of the instance, in the format
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The snapshot resource ID, in the format 'my-snapshot', where the
     * specified ID is the {snapshot_id} of the fully qualified name like
     * `projects/{project_id}/locations/{location_id}/instances/{instance_id}/snapshots/{snapshot_id}`
     *
     * Generated from protobuf field <code>string target_snapshot_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $target_snapshot_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required.
     *           `projects/{project_id}/locations/{location_id}/instances/{instance_id}`.
     *           The resource name of the instance, in the format
     *     @type string $target_snapshot_id
     *           Required. The snapshot resource ID, in the format 'my-snapshot', where the
     *           specified ID is the {snapshot_id} of the fully qualified name like
     *           `projects/{project_id}/locations/{location_id}/instances/{instance_id}/snapshots/{snapshot_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Filestore\V1\CloudFilestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required.
     * `projects/{project_id}/locations/{location_id}/instances/{instance_id}`.
     * The resource name of the instance, in the format
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required.
     * `projects/{project_id}/locations/{location_id}/instances/{instance_id}`.
     * The resource name of the instance, in the format
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The snapshot resource ID, in the format 'my-snapshot', where the
     * specified ID is the {snapshot_id} of the fully qualified name like
     * `projects/{project_id}/locations/{location_id}/instances/{instance_id}/snapshots/{snapshot_id}`
     *
     * Generated from protobuf field <code>string target_snapshot_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTargetSnapshotId()
    {
        return $this->target_snapshot_id;
    }

    /**
     * Required. The snapshot resource ID, in the format 'my-snapshot', where the
     * specified ID is the {snapshot_id} of the fully qualified name like
     * `projects/{project_id}/locations/{location_id}/instances/{instance_id}/snapshots/{snapshot_id}`
     *
     * Generated from protobuf field <code>string target_snapshot_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTargetSnapshotId($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_snapshot_id = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [DatasetService.ListDatasetVersions][google.cloud.aiplatform.v1.DatasetService.ListDatasetVersions].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListDatasetVersionsRequest</code>
 */
class ListDatasetVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Dataset to list DatasetVersions from.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The standard list filter.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Optional. The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. The standard list page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $read_mask = null;
    /**
     * Optional. A comma-separated list of fields to order by, sorted in ascending
     * order. Use "desc" after a field name for descending.
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $order_by = '';

    /**
     * @param string $parent Required. The resource name of the Dataset to list DatasetVersions from.
     *                       Format:
     *                       `projects/{project}/locations/{location}/datasets/{dataset}`
     *                       Please see {@see DatasetServiceClient::datasetName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\ListDatasetVersionsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Dataset to list DatasetVersions from.
     *           Format:
     *           `projects/{project}/locations/{location}/datasets/{dataset}`
     *     @type string $filter
     *           Optional. The standard list filter.
     *     @type int $page_size
     *           Optional. The standard list page size.
     *     @type string $page_token
     *           Optional. The standard list page token.
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           Optional. Mask specifying which fields to read.
     *     @type string $order_by
     *           Optional. A comma-separated list of fields to order by, sorted in ascending
     *           order. Use "desc" after a field name for descending.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DatasetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Dataset to list DatasetVersions from.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Dataset to list DatasetVersions from.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The standard list filter.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. The standard list filter.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The standard list page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The standard list page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getReadMask()
    {
        return $this->read_mask;
    }

    public function hasReadMask()
    {
        return isset($this->read_mask);
    }

    public function clearReadMask()
    {
        unset($this->read_mask);
    }

    /**
     * Optional. Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

    /**
     * Optional. A comma-separated list of fields to order by, sorted in ascending
     * order. Use "desc" after a field name for descending.
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. A comma-separated list of fields to order by, sorted in ascending
     * order. Use "desc" after a field name for descending.
     *
     * Generated from protobuf field <code>string order_by = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}


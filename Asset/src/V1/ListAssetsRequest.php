<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListAssets request.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.ListAssetsRequest</code>
 */
class ListAssetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the organization or project the assets belong to. Format:
     * "organizations/[organization-number]" (such as "organizations/123"),
     * "projects/[project-id]" (such as "projects/my-project-id"), or
     * "projects/[project-number]" (such as "projects/12345").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Timestamp to take an asset snapshot. This can only be set to a timestamp
     * between the current time and the current time minus 35 days (inclusive).
     * If not specified, the current time will be used. Due to delays in resource
     * data collection and indexing, there is a volatile window during which
     * running the same query may get different results.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 2;</code>
     */
    private $read_time = null;
    /**
     * A list of asset types to take a snapshot for. For example:
     * "compute.googleapis.com/Disk".
     * Regular expression is also supported. For example:
     * * "compute.googleapis.com.*" snapshots resources whose asset type starts
     * with "compute.googleapis.com".
     * * ".*Instance" snapshots resources whose asset type ends with "Instance".
     * * ".*Instance.*" snapshots resources whose asset type contains "Instance".
     * See [RE2](https://github.com/google/re2/wiki/Syntax) for all supported
     * regular expression syntax. If the regular expression does not match any
     * supported asset type, an INVALID_ARGUMENT error will be returned.
     * If specified, only matching assets will be returned, otherwise, it will
     * snapshot all asset types. See [Introduction to Cloud Asset
     * Inventory](https://cloud.google.com/asset-inventory/docs/overview)
     * for all supported asset types.
     *
     * Generated from protobuf field <code>repeated string asset_types = 3;</code>
     */
    private $asset_types;
    /**
     * Asset content type. If not specified, no content but the asset name will
     * be returned.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.ContentType content_type = 4;</code>
     */
    private $content_type = 0;
    /**
     * The maximum number of assets to be returned in a single response. Default
     * is 100, minimum is 1, and maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     */
    private $page_size = 0;
    /**
     * The `next_page_token` returned from the previous `ListAssetsResponse`, or
     * unspecified for the first `ListAssetsRequest`. It is a continuation of a
     * prior `ListAssets` call, and the API should return the next page of assets.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of the organization or project the assets belong to. Format:
     *           "organizations/[organization-number]" (such as "organizations/123"),
     *           "projects/[project-id]" (such as "projects/my-project-id"), or
     *           "projects/[project-number]" (such as "projects/12345").
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Timestamp to take an asset snapshot. This can only be set to a timestamp
     *           between the current time and the current time minus 35 days (inclusive).
     *           If not specified, the current time will be used. Due to delays in resource
     *           data collection and indexing, there is a volatile window during which
     *           running the same query may get different results.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $asset_types
     *           A list of asset types to take a snapshot for. For example:
     *           "compute.googleapis.com/Disk".
     *           Regular expression is also supported. For example:
     *           * "compute.googleapis.com.*" snapshots resources whose asset type starts
     *           with "compute.googleapis.com".
     *           * ".*Instance" snapshots resources whose asset type ends with "Instance".
     *           * ".*Instance.*" snapshots resources whose asset type contains "Instance".
     *           See [RE2](https://github.com/google/re2/wiki/Syntax) for all supported
     *           regular expression syntax. If the regular expression does not match any
     *           supported asset type, an INVALID_ARGUMENT error will be returned.
     *           If specified, only matching assets will be returned, otherwise, it will
     *           snapshot all asset types. See [Introduction to Cloud Asset
     *           Inventory](https://cloud.google.com/asset-inventory/docs/overview)
     *           for all supported asset types.
     *     @type int $content_type
     *           Asset content type. If not specified, no content but the asset name will
     *           be returned.
     *     @type int $page_size
     *           The maximum number of assets to be returned in a single response. Default
     *           is 100, minimum is 1, and maximum is 1000.
     *     @type string $page_token
     *           The `next_page_token` returned from the previous `ListAssetsResponse`, or
     *           unspecified for the first `ListAssetsRequest`. It is a continuation of a
     *           prior `ListAssets` call, and the API should return the next page of assets.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the organization or project the assets belong to. Format:
     * "organizations/[organization-number]" (such as "organizations/123"),
     * "projects/[project-id]" (such as "projects/my-project-id"), or
     * "projects/[project-number]" (such as "projects/12345").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the organization or project the assets belong to. Format:
     * "organizations/[organization-number]" (such as "organizations/123"),
     * "projects/[project-id]" (such as "projects/my-project-id"), or
     * "projects/[project-number]" (such as "projects/12345").
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
     * Timestamp to take an asset snapshot. This can only be set to a timestamp
     * between the current time and the current time minus 35 days (inclusive).
     * If not specified, the current time will be used. Due to delays in resource
     * data collection and indexing, there is a volatile window during which
     * running the same query may get different results.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReadTime()
    {
        return isset($this->read_time) ? $this->read_time : null;
    }

    public function hasReadTime()
    {
        return isset($this->read_time);
    }

    public function clearReadTime()
    {
        unset($this->read_time);
    }

    /**
     * Timestamp to take an asset snapshot. This can only be set to a timestamp
     * between the current time and the current time minus 35 days (inclusive).
     * If not specified, the current time will be used. Due to delays in resource
     * data collection and indexing, there is a volatile window during which
     * running the same query may get different results.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_time = $var;

        return $this;
    }

    /**
     * A list of asset types to take a snapshot for. For example:
     * "compute.googleapis.com/Disk".
     * Regular expression is also supported. For example:
     * * "compute.googleapis.com.*" snapshots resources whose asset type starts
     * with "compute.googleapis.com".
     * * ".*Instance" snapshots resources whose asset type ends with "Instance".
     * * ".*Instance.*" snapshots resources whose asset type contains "Instance".
     * See [RE2](https://github.com/google/re2/wiki/Syntax) for all supported
     * regular expression syntax. If the regular expression does not match any
     * supported asset type, an INVALID_ARGUMENT error will be returned.
     * If specified, only matching assets will be returned, otherwise, it will
     * snapshot all asset types. See [Introduction to Cloud Asset
     * Inventory](https://cloud.google.com/asset-inventory/docs/overview)
     * for all supported asset types.
     *
     * Generated from protobuf field <code>repeated string asset_types = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssetTypes()
    {
        return $this->asset_types;
    }

    /**
     * A list of asset types to take a snapshot for. For example:
     * "compute.googleapis.com/Disk".
     * Regular expression is also supported. For example:
     * * "compute.googleapis.com.*" snapshots resources whose asset type starts
     * with "compute.googleapis.com".
     * * ".*Instance" snapshots resources whose asset type ends with "Instance".
     * * ".*Instance.*" snapshots resources whose asset type contains "Instance".
     * See [RE2](https://github.com/google/re2/wiki/Syntax) for all supported
     * regular expression syntax. If the regular expression does not match any
     * supported asset type, an INVALID_ARGUMENT error will be returned.
     * If specified, only matching assets will be returned, otherwise, it will
     * snapshot all asset types. See [Introduction to Cloud Asset
     * Inventory](https://cloud.google.com/asset-inventory/docs/overview)
     * for all supported asset types.
     *
     * Generated from protobuf field <code>repeated string asset_types = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssetTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->asset_types = $arr;

        return $this;
    }

    /**
     * Asset content type. If not specified, no content but the asset name will
     * be returned.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.ContentType content_type = 4;</code>
     * @return int
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * Asset content type. If not specified, no content but the asset name will
     * be returned.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.ContentType content_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setContentType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Asset\V1\ContentType::class);
        $this->content_type = $var;

        return $this;
    }

    /**
     * The maximum number of assets to be returned in a single response. Default
     * is 100, minimum is 1, and maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of assets to be returned in a single response. Default
     * is 100, minimum is 1, and maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
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
     * The `next_page_token` returned from the previous `ListAssetsResponse`, or
     * unspecified for the first `ListAssetsRequest`. It is a continuation of a
     * prior `ListAssets` call, and the API should return the next page of assets.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The `next_page_token` returned from the previous `ListAssetsResponse`, or
     * unspecified for the first `ListAssetsRequest`. It is a continuation of a
     * prior `ListAssets` call, and the API should return the next page of assets.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}


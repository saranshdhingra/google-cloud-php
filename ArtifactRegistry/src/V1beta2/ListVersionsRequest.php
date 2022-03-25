<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/version.proto

namespace Google\Cloud\ArtifactRegistry\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to list versions.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1beta2.ListVersionsRequest</code>
 */
class ListVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the parent resource whose versions will be listed.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * The maximum number of versions to return. Maximum page size is 1,000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The next_page_token value returned from a previous list request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * The view that should be returned in the response.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.VersionView view = 4;</code>
     */
    private $view = 0;
    /**
     * Optional. The field to order the results by.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The name of the parent resource whose versions will be listed.
     *     @type int $page_size
     *           The maximum number of versions to return. Maximum page size is 1,000.
     *     @type string $page_token
     *           The next_page_token value returned from a previous list request, if any.
     *     @type int $view
     *           The view that should be returned in the response.
     *     @type string $order_by
     *           Optional. The field to order the results by.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\Version::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the parent resource whose versions will be listed.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The name of the parent resource whose versions will be listed.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
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
     * The maximum number of versions to return. Maximum page size is 1,000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of versions to return. Maximum page size is 1,000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
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
     * The next_page_token value returned from a previous list request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value returned from a previous list request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
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
     * The view that should be returned in the response.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.VersionView view = 4;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * The view that should be returned in the response.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.VersionView view = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ArtifactRegistry\V1beta2\VersionView::class);
        $this->view = $var;

        return $this;
    }

    /**
     * Optional. The field to order the results by.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. The field to order the results by.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
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


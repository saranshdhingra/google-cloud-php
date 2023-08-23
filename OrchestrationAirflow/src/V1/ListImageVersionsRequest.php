<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/orchestration/airflow/service/v1/image_versions.proto

namespace Google\Cloud\Orchestration\Airflow\Service\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List ImageVersions in a project and location.
 *
 * Generated from protobuf message <code>google.cloud.orchestration.airflow.service.v1.ListImageVersionsRequest</code>
 */
class ListImageVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * List ImageVersions in the given project and location, in the form:
     * "projects/{projectId}/locations/{locationId}"
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * The maximum number of image_versions to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The next_page_token value returned from a previous List request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * Whether or not image versions from old releases should be included.
     *
     * Generated from protobuf field <code>bool include_past_releases = 4;</code>
     */
    private $include_past_releases = false;

    /**
     * @param string $parent List ImageVersions in the given project and location, in the form:
     *                       "projects/{projectId}/locations/{locationId}"
     *
     * @return \Google\Cloud\Orchestration\Airflow\Service\V1\ListImageVersionsRequest
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
     *           List ImageVersions in the given project and location, in the form:
     *           "projects/{projectId}/locations/{locationId}"
     *     @type int $page_size
     *           The maximum number of image_versions to return.
     *     @type string $page_token
     *           The next_page_token value returned from a previous List request, if any.
     *     @type bool $include_past_releases
     *           Whether or not image versions from old releases should be included.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Orchestration\Airflow\Service\V1\ImageVersions::initOnce();
        parent::__construct($data);
    }

    /**
     * List ImageVersions in the given project and location, in the form:
     * "projects/{projectId}/locations/{locationId}"
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * List ImageVersions in the given project and location, in the form:
     * "projects/{projectId}/locations/{locationId}"
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
     * The maximum number of image_versions to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of image_versions to return.
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
     * The next_page_token value returned from a previous List request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value returned from a previous List request, if any.
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
     * Whether or not image versions from old releases should be included.
     *
     * Generated from protobuf field <code>bool include_past_releases = 4;</code>
     * @return bool
     */
    public function getIncludePastReleases()
    {
        return $this->include_past_releases;
    }

    /**
     * Whether or not image versions from old releases should be included.
     *
     * Generated from protobuf field <code>bool include_past_releases = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludePastReleases($var)
    {
        GPBUtil::checkBool($var);
        $this->include_past_releases = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/repository.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Virtual repository configuration.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.VirtualRepositoryConfig</code>
 */
class VirtualRepositoryConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Policies that configure the upstream artifacts distributed by the Virtual
     * Repository. Upstream policies cannot be set on a standard repository.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1.UpstreamPolicy upstream_policies = 1;</code>
     */
    private $upstream_policies;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ArtifactRegistry\V1\UpstreamPolicy>|\Google\Protobuf\Internal\RepeatedField $upstream_policies
     *           Policies that configure the upstream artifacts distributed by the Virtual
     *           Repository. Upstream policies cannot be set on a standard repository.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\Repository::initOnce();
        parent::__construct($data);
    }

    /**
     * Policies that configure the upstream artifacts distributed by the Virtual
     * Repository. Upstream policies cannot be set on a standard repository.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1.UpstreamPolicy upstream_policies = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUpstreamPolicies()
    {
        return $this->upstream_policies;
    }

    /**
     * Policies that configure the upstream artifacts distributed by the Virtual
     * Repository. Upstream policies cannot be set on a standard repository.
     *
     * Generated from protobuf field <code>repeated .google.devtools.artifactregistry.v1.UpstreamPolicy upstream_policies = 1;</code>
     * @param array<\Google\Cloud\ArtifactRegistry\V1\UpstreamPolicy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUpstreamPolicies($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ArtifactRegistry\V1\UpstreamPolicy::class);
        $this->upstream_policies = $arr;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1beta1/membership.proto

namespace Google\Cloud\GkeHub\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Membership contains information about a member cluster.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1beta1.Membership</code>
 */
class Membership extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The full, unique name of this Membership resource in the
     * format `projects/&#42;&#47;locations/&#42;&#47;memberships/{membership_id}`, set during
     * creation.
     * `membership_id` must be a valid RFC 1123 compliant DNS label:
     *   1. At most 63 characters in length
     *   2. It must consist of lower case alphanumeric characters or `-`
     *   3. It must start and end with an alphanumeric character
     * Which can be expressed as the regex: `[a-z0-9]([-a-z0-9]*[a-z0-9])?`,
     * with a maximum length of 63 characters.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Optional. GCP labels for this membership.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. Description of this membership, limited to 63 characters.
     * Must match the regex: `[a-zA-Z0-9][a-zA-Z0-9_\-\.\ ]*`
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Output only. State of the Membership resource.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.MembershipState state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = null;
    /**
     * Optional. How to identify workloads from this Membership.
     * See the documentation on Workload Identity for more details:
     * https://cloud.google.com/kubernetes-engine/docs/how-to/workload-identity
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.Authority authority = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $authority = null;
    /**
     * Output only. When the Membership was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. When the Membership was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. When the Membership was deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $delete_time = null;
    /**
     * Optional. An externally-generated and managed ID for this Membership. This
     * ID may be modified after creation, but this is not recommended. For GKE
     * clusters, external_id is managed by the Hub API and updates will be
     * ignored.
     * The ID must match the regex: `[a-zA-Z0-9][a-zA-Z0-9_\-\.]*`
     * If this Membership represents a Kubernetes cluster, this value should be
     * set to the UID of the `kube-system` namespace object.
     *
     * Generated from protobuf field <code>string external_id = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $external_id = '';
    /**
     * Output only. For clusters using Connect, the timestamp of the most recent
     * connection established with Google Cloud. This time is updated every
     * several minutes, not continuously. For clusters that do not use GKE
     * Connect, or that have never connected successfully, this field will be
     * unset.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_connection_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $last_connection_time = null;
    /**
     * Output only. Google-generated UUID for this resource. This is unique across
     * all Membership resources. If a Membership resource is deleted and another
     * resource with the same name is created, it gets a different unique_id.
     *
     * Generated from protobuf field <code>string unique_id = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $unique_id = '';
    /**
     * Optional. The infrastructure type this Membership is running on.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.Membership.InfrastructureType infrastructure_type = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $infrastructure_type = 0;
    protected $type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The full, unique name of this Membership resource in the
     *           format `projects/&#42;&#47;locations/&#42;&#47;memberships/{membership_id}`, set during
     *           creation.
     *           `membership_id` must be a valid RFC 1123 compliant DNS label:
     *             1. At most 63 characters in length
     *             2. It must consist of lower case alphanumeric characters or `-`
     *             3. It must start and end with an alphanumeric character
     *           Which can be expressed as the regex: `[a-z0-9]([-a-z0-9]*[a-z0-9])?`,
     *           with a maximum length of 63 characters.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. GCP labels for this membership.
     *     @type string $description
     *           Optional. Description of this membership, limited to 63 characters.
     *           Must match the regex: `[a-zA-Z0-9][a-zA-Z0-9_\-\.\ ]*`
     *     @type \Google\Cloud\GkeHub\V1beta1\MembershipEndpoint $endpoint
     *           Optional. Endpoint information to reach this member.
     *     @type \Google\Cloud\GkeHub\V1beta1\MembershipState $state
     *           Output only. State of the Membership resource.
     *     @type \Google\Cloud\GkeHub\V1beta1\Authority $authority
     *           Optional. How to identify workloads from this Membership.
     *           See the documentation on Workload Identity for more details:
     *           https://cloud.google.com/kubernetes-engine/docs/how-to/workload-identity
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. When the Membership was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. When the Membership was last updated.
     *     @type \Google\Protobuf\Timestamp $delete_time
     *           Output only. When the Membership was deleted.
     *     @type string $external_id
     *           Optional. An externally-generated and managed ID for this Membership. This
     *           ID may be modified after creation, but this is not recommended. For GKE
     *           clusters, external_id is managed by the Hub API and updates will be
     *           ignored.
     *           The ID must match the regex: `[a-zA-Z0-9][a-zA-Z0-9_\-\.]*`
     *           If this Membership represents a Kubernetes cluster, this value should be
     *           set to the UID of the `kube-system` namespace object.
     *     @type \Google\Protobuf\Timestamp $last_connection_time
     *           Output only. For clusters using Connect, the timestamp of the most recent
     *           connection established with Google Cloud. This time is updated every
     *           several minutes, not continuously. For clusters that do not use GKE
     *           Connect, or that have never connected successfully, this field will be
     *           unset.
     *     @type string $unique_id
     *           Output only. Google-generated UUID for this resource. This is unique across
     *           all Membership resources. If a Membership resource is deleted and another
     *           resource with the same name is created, it gets a different unique_id.
     *     @type int $infrastructure_type
     *           Optional. The infrastructure type this Membership is running on.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1Beta1\Membership::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The full, unique name of this Membership resource in the
     * format `projects/&#42;&#47;locations/&#42;&#47;memberships/{membership_id}`, set during
     * creation.
     * `membership_id` must be a valid RFC 1123 compliant DNS label:
     *   1. At most 63 characters in length
     *   2. It must consist of lower case alphanumeric characters or `-`
     *   3. It must start and end with an alphanumeric character
     * Which can be expressed as the regex: `[a-z0-9]([-a-z0-9]*[a-z0-9])?`,
     * with a maximum length of 63 characters.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The full, unique name of this Membership resource in the
     * format `projects/&#42;&#47;locations/&#42;&#47;memberships/{membership_id}`, set during
     * creation.
     * `membership_id` must be a valid RFC 1123 compliant DNS label:
     *   1. At most 63 characters in length
     *   2. It must consist of lower case alphanumeric characters or `-`
     *   3. It must start and end with an alphanumeric character
     * Which can be expressed as the regex: `[a-z0-9]([-a-z0-9]*[a-z0-9])?`,
     * with a maximum length of 63 characters.
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
     * Optional. GCP labels for this membership.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. GCP labels for this membership.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. Description of this membership, limited to 63 characters.
     * Must match the regex: `[a-zA-Z0-9][a-zA-Z0-9_\-\.\ ]*`
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of this membership, limited to 63 characters.
     * Must match the regex: `[a-zA-Z0-9][a-zA-Z0-9_\-\.\ ]*`
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. Endpoint information to reach this member.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.MembershipEndpoint endpoint = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeHub\V1beta1\MembershipEndpoint|null
     */
    public function getEndpoint()
    {
        return $this->readOneof(4);
    }

    public function hasEndpoint()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional. Endpoint information to reach this member.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.MembershipEndpoint endpoint = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeHub\V1beta1\MembershipEndpoint $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\V1beta1\MembershipEndpoint::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Output only. State of the Membership resource.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.MembershipState state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\GkeHub\V1beta1\MembershipState|null
     */
    public function getState()
    {
        return $this->state;
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * Output only. State of the Membership resource.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.MembershipState state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\GkeHub\V1beta1\MembershipState $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\V1beta1\MembershipState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional. How to identify workloads from this Membership.
     * See the documentation on Workload Identity for more details:
     * https://cloud.google.com/kubernetes-engine/docs/how-to/workload-identity
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.Authority authority = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\GkeHub\V1beta1\Authority|null
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    public function hasAuthority()
    {
        return isset($this->authority);
    }

    public function clearAuthority()
    {
        unset($this->authority);
    }

    /**
     * Optional. How to identify workloads from this Membership.
     * See the documentation on Workload Identity for more details:
     * https://cloud.google.com/kubernetes-engine/docs/how-to/workload-identity
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.Authority authority = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\GkeHub\V1beta1\Authority $var
     * @return $this
     */
    public function setAuthority($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\V1beta1\Authority::class);
        $this->authority = $var;

        return $this;
    }

    /**
     * Output only. When the Membership was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. When the Membership was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. When the Membership was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. When the Membership was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. When the Membership was deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeleteTime()
    {
        return $this->delete_time;
    }

    public function hasDeleteTime()
    {
        return isset($this->delete_time);
    }

    public function clearDeleteTime()
    {
        unset($this->delete_time);
    }

    /**
     * Output only. When the Membership was deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->delete_time = $var;

        return $this;
    }

    /**
     * Optional. An externally-generated and managed ID for this Membership. This
     * ID may be modified after creation, but this is not recommended. For GKE
     * clusters, external_id is managed by the Hub API and updates will be
     * ignored.
     * The ID must match the regex: `[a-zA-Z0-9][a-zA-Z0-9_\-\.]*`
     * If this Membership represents a Kubernetes cluster, this value should be
     * set to the UID of the `kube-system` namespace object.
     *
     * Generated from protobuf field <code>string external_id = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getExternalId()
    {
        return $this->external_id;
    }

    /**
     * Optional. An externally-generated and managed ID for this Membership. This
     * ID may be modified after creation, but this is not recommended. For GKE
     * clusters, external_id is managed by the Hub API and updates will be
     * ignored.
     * The ID must match the regex: `[a-zA-Z0-9][a-zA-Z0-9_\-\.]*`
     * If this Membership represents a Kubernetes cluster, this value should be
     * set to the UID of the `kube-system` namespace object.
     *
     * Generated from protobuf field <code>string external_id = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setExternalId($var)
    {
        GPBUtil::checkString($var, True);
        $this->external_id = $var;

        return $this;
    }

    /**
     * Output only. For clusters using Connect, the timestamp of the most recent
     * connection established with Google Cloud. This time is updated every
     * several minutes, not continuously. For clusters that do not use GKE
     * Connect, or that have never connected successfully, this field will be
     * unset.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_connection_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastConnectionTime()
    {
        return $this->last_connection_time;
    }

    public function hasLastConnectionTime()
    {
        return isset($this->last_connection_time);
    }

    public function clearLastConnectionTime()
    {
        unset($this->last_connection_time);
    }

    /**
     * Output only. For clusters using Connect, the timestamp of the most recent
     * connection established with Google Cloud. This time is updated every
     * several minutes, not continuously. For clusters that do not use GKE
     * Connect, or that have never connected successfully, this field will be
     * unset.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_connection_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastConnectionTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_connection_time = $var;

        return $this;
    }

    /**
     * Output only. Google-generated UUID for this resource. This is unique across
     * all Membership resources. If a Membership resource is deleted and another
     * resource with the same name is created, it gets a different unique_id.
     *
     * Generated from protobuf field <code>string unique_id = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * Output only. Google-generated UUID for this resource. This is unique across
     * all Membership resources. If a Membership resource is deleted and another
     * resource with the same name is created, it gets a different unique_id.
     *
     * Generated from protobuf field <code>string unique_id = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUniqueId($var)
    {
        GPBUtil::checkString($var, True);
        $this->unique_id = $var;

        return $this;
    }

    /**
     * Optional. The infrastructure type this Membership is running on.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.Membership.InfrastructureType infrastructure_type = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getInfrastructureType()
    {
        return $this->infrastructure_type;
    }

    /**
     * Optional. The infrastructure type this Membership is running on.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.v1beta1.Membership.InfrastructureType infrastructure_type = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setInfrastructureType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeHub\V1beta1\Membership\InfrastructureType::class);
        $this->infrastructure_type = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->whichOneof("type");
    }

}


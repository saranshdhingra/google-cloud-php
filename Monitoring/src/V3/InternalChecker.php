<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An internal checker allows Uptime checks to run on private/internal GCP
 * resources.
 *
 * Generated from protobuf message <code>google.monitoring.v3.InternalChecker</code>
 */
class InternalChecker extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique resource name for this InternalChecker. The format is:
     *   `projects/[PROJECT_ID]/internalCheckers/[INTERNAL_CHECKER_ID]`.
     * `[PROJECT_ID]` is the Stackdriver Workspace project for the
     * Uptime check config associated with the internal checker.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The checker's human-readable name. The display name
     * should be unique within a Stackdriver Workspace in order to make it easier
     * to identify; however, uniqueness is not enforced.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * The [GCP VPC network](https://cloud.google.com/vpc/docs/vpc) where the
     * internal resource lives (ex: "default").
     *
     * Generated from protobuf field <code>string network = 3;</code>
     */
    private $network = '';
    /**
     * The GCP zone the Uptime check should egress from. Only respected for
     * internal Uptime checks, where internal_network is specified.
     *
     * Generated from protobuf field <code>string gcp_zone = 4;</code>
     */
    private $gcp_zone = '';
    /**
     * The GCP project ID where the internal checker lives. Not necessary
     * the same as the Workspace project.
     *
     * Generated from protobuf field <code>string peer_project_id = 6;</code>
     */
    private $peer_project_id = '';
    /**
     * The current operational state of the internal checker.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.InternalChecker.State state = 7;</code>
     */
    private $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           A unique resource name for this InternalChecker. The format is:
     *             `projects/[PROJECT_ID]/internalCheckers/[INTERNAL_CHECKER_ID]`.
     *           `[PROJECT_ID]` is the Stackdriver Workspace project for the
     *           Uptime check config associated with the internal checker.
     *     @type string $display_name
     *           The checker's human-readable name. The display name
     *           should be unique within a Stackdriver Workspace in order to make it easier
     *           to identify; however, uniqueness is not enforced.
     *     @type string $network
     *           The [GCP VPC network](https://cloud.google.com/vpc/docs/vpc) where the
     *           internal resource lives (ex: "default").
     *     @type string $gcp_zone
     *           The GCP zone the Uptime check should egress from. Only respected for
     *           internal Uptime checks, where internal_network is specified.
     *     @type string $peer_project_id
     *           The GCP project ID where the internal checker lives. Not necessary
     *           the same as the Workspace project.
     *     @type int $state
     *           The current operational state of the internal checker.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Uptime::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique resource name for this InternalChecker. The format is:
     *   `projects/[PROJECT_ID]/internalCheckers/[INTERNAL_CHECKER_ID]`.
     * `[PROJECT_ID]` is the Stackdriver Workspace project for the
     * Uptime check config associated with the internal checker.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A unique resource name for this InternalChecker. The format is:
     *   `projects/[PROJECT_ID]/internalCheckers/[INTERNAL_CHECKER_ID]`.
     * `[PROJECT_ID]` is the Stackdriver Workspace project for the
     * Uptime check config associated with the internal checker.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The checker's human-readable name. The display name
     * should be unique within a Stackdriver Workspace in order to make it easier
     * to identify; however, uniqueness is not enforced.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The checker's human-readable name. The display name
     * should be unique within a Stackdriver Workspace in order to make it easier
     * to identify; however, uniqueness is not enforced.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * The [GCP VPC network](https://cloud.google.com/vpc/docs/vpc) where the
     * internal resource lives (ex: "default").
     *
     * Generated from protobuf field <code>string network = 3;</code>
     * @return string
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * The [GCP VPC network](https://cloud.google.com/vpc/docs/vpc) where the
     * internal resource lives (ex: "default").
     *
     * Generated from protobuf field <code>string network = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * The GCP zone the Uptime check should egress from. Only respected for
     * internal Uptime checks, where internal_network is specified.
     *
     * Generated from protobuf field <code>string gcp_zone = 4;</code>
     * @return string
     */
    public function getGcpZone()
    {
        return $this->gcp_zone;
    }

    /**
     * The GCP zone the Uptime check should egress from. Only respected for
     * internal Uptime checks, where internal_network is specified.
     *
     * Generated from protobuf field <code>string gcp_zone = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setGcpZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcp_zone = $var;

        return $this;
    }

    /**
     * The GCP project ID where the internal checker lives. Not necessary
     * the same as the Workspace project.
     *
     * Generated from protobuf field <code>string peer_project_id = 6;</code>
     * @return string
     */
    public function getPeerProjectId()
    {
        return $this->peer_project_id;
    }

    /**
     * The GCP project ID where the internal checker lives. Not necessary
     * the same as the Workspace project.
     *
     * Generated from protobuf field <code>string peer_project_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPeerProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_project_id = $var;

        return $this;
    }

    /**
     * The current operational state of the internal checker.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.InternalChecker.State state = 7;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The current operational state of the internal checker.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.InternalChecker.State state = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Monitoring\V3\InternalChecker_State::class);
        $this->state = $var;

        return $this;
    }

}


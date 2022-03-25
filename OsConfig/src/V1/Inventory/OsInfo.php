<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/inventory.proto

namespace Google\Cloud\OsConfig\V1\Inventory;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Operating system information for the VM.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.Inventory.OsInfo</code>
 */
class OsInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The VM hostname.
     *
     * Generated from protobuf field <code>string hostname = 9;</code>
     */
    private $hostname = '';
    /**
     * The operating system long name.
     * For example 'Debian GNU/Linux 9' or 'Microsoft Window Server 2019
     * Datacenter'.
     *
     * Generated from protobuf field <code>string long_name = 2;</code>
     */
    private $long_name = '';
    /**
     * The operating system short name.
     * For example, 'windows' or 'debian'.
     *
     * Generated from protobuf field <code>string short_name = 3;</code>
     */
    private $short_name = '';
    /**
     * The version of the operating system.
     *
     * Generated from protobuf field <code>string version = 4;</code>
     */
    private $version = '';
    /**
     * The system architecture of the operating system.
     *
     * Generated from protobuf field <code>string architecture = 5;</code>
     */
    private $architecture = '';
    /**
     * The kernel version of the operating system.
     *
     * Generated from protobuf field <code>string kernel_version = 6;</code>
     */
    private $kernel_version = '';
    /**
     * The kernel release of the operating system.
     *
     * Generated from protobuf field <code>string kernel_release = 7;</code>
     */
    private $kernel_release = '';
    /**
     * The current version of the OS Config agent running on the VM.
     *
     * Generated from protobuf field <code>string osconfig_agent_version = 8;</code>
     */
    private $osconfig_agent_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hostname
     *           The VM hostname.
     *     @type string $long_name
     *           The operating system long name.
     *           For example 'Debian GNU/Linux 9' or 'Microsoft Window Server 2019
     *           Datacenter'.
     *     @type string $short_name
     *           The operating system short name.
     *           For example, 'windows' or 'debian'.
     *     @type string $version
     *           The version of the operating system.
     *     @type string $architecture
     *           The system architecture of the operating system.
     *     @type string $kernel_version
     *           The kernel version of the operating system.
     *     @type string $kernel_release
     *           The kernel release of the operating system.
     *     @type string $osconfig_agent_version
     *           The current version of the OS Config agent running on the VM.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\Inventory::initOnce();
        parent::__construct($data);
    }

    /**
     * The VM hostname.
     *
     * Generated from protobuf field <code>string hostname = 9;</code>
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * The VM hostname.
     *
     * Generated from protobuf field <code>string hostname = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setHostname($var)
    {
        GPBUtil::checkString($var, True);
        $this->hostname = $var;

        return $this;
    }

    /**
     * The operating system long name.
     * For example 'Debian GNU/Linux 9' or 'Microsoft Window Server 2019
     * Datacenter'.
     *
     * Generated from protobuf field <code>string long_name = 2;</code>
     * @return string
     */
    public function getLongName()
    {
        return $this->long_name;
    }

    /**
     * The operating system long name.
     * For example 'Debian GNU/Linux 9' or 'Microsoft Window Server 2019
     * Datacenter'.
     *
     * Generated from protobuf field <code>string long_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLongName($var)
    {
        GPBUtil::checkString($var, True);
        $this->long_name = $var;

        return $this;
    }

    /**
     * The operating system short name.
     * For example, 'windows' or 'debian'.
     *
     * Generated from protobuf field <code>string short_name = 3;</code>
     * @return string
     */
    public function getShortName()
    {
        return $this->short_name;
    }

    /**
     * The operating system short name.
     * For example, 'windows' or 'debian'.
     *
     * Generated from protobuf field <code>string short_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setShortName($var)
    {
        GPBUtil::checkString($var, True);
        $this->short_name = $var;

        return $this;
    }

    /**
     * The version of the operating system.
     *
     * Generated from protobuf field <code>string version = 4;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version of the operating system.
     *
     * Generated from protobuf field <code>string version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * The system architecture of the operating system.
     *
     * Generated from protobuf field <code>string architecture = 5;</code>
     * @return string
     */
    public function getArchitecture()
    {
        return $this->architecture;
    }

    /**
     * The system architecture of the operating system.
     *
     * Generated from protobuf field <code>string architecture = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setArchitecture($var)
    {
        GPBUtil::checkString($var, True);
        $this->architecture = $var;

        return $this;
    }

    /**
     * The kernel version of the operating system.
     *
     * Generated from protobuf field <code>string kernel_version = 6;</code>
     * @return string
     */
    public function getKernelVersion()
    {
        return $this->kernel_version;
    }

    /**
     * The kernel version of the operating system.
     *
     * Generated from protobuf field <code>string kernel_version = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setKernelVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->kernel_version = $var;

        return $this;
    }

    /**
     * The kernel release of the operating system.
     *
     * Generated from protobuf field <code>string kernel_release = 7;</code>
     * @return string
     */
    public function getKernelRelease()
    {
        return $this->kernel_release;
    }

    /**
     * The kernel release of the operating system.
     *
     * Generated from protobuf field <code>string kernel_release = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setKernelRelease($var)
    {
        GPBUtil::checkString($var, True);
        $this->kernel_release = $var;

        return $this;
    }

    /**
     * The current version of the OS Config agent running on the VM.
     *
     * Generated from protobuf field <code>string osconfig_agent_version = 8;</code>
     * @return string
     */
    public function getOsconfigAgentVersion()
    {
        return $this->osconfig_agent_version;
    }

    /**
     * The current version of the OS Config agent running on the VM.
     *
     * Generated from protobuf field <code>string osconfig_agent_version = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setOsconfigAgentVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->osconfig_agent_version = $var;

        return $this;
    }

}



<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/domains/v1beta1/domains.proto

namespace Google\Cloud\Domains\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `ConfigureDnsSettings` method.
 *
 * Generated from protobuf message <code>google.cloud.domains.v1beta1.ConfigureDnsSettingsRequest</code>
 */
class ConfigureDnsSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the `Registration` whose DNS settings are being updated,
     * in the format `projects/&#42;&#47;locations/&#42;&#47;registrations/&#42;`.
     *
     * Generated from protobuf field <code>string registration = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $registration = '';
    /**
     * Fields of the `DnsSettings` to update.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.DnsSettings dns_settings = 2;</code>
     */
    private $dns_settings = null;
    /**
     * Required. The field mask describing which fields to update as a comma-separated list.
     * For example, if only the name servers are being updated for an existing
     * Custom DNS configuration, the `update_mask` is
     * `"custom_dns.name_servers"`.
     * When changing the DNS provider from one type to another, pass the new
     * provider's field name as part of the field mask. For example, when changing
     * from a Google Domains DNS configuration to a Custom DNS configuration, the
     * `update_mask` is `"custom_dns"`. //
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * Validate the request without actually updating the DNS settings.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     */
    private $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $registration
     *           Required. The name of the `Registration` whose DNS settings are being updated,
     *           in the format `projects/&#42;&#47;locations/&#42;&#47;registrations/&#42;`.
     *     @type \Google\Cloud\Domains\V1beta1\DnsSettings $dns_settings
     *           Fields of the `DnsSettings` to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The field mask describing which fields to update as a comma-separated list.
     *           For example, if only the name servers are being updated for an existing
     *           Custom DNS configuration, the `update_mask` is
     *           `"custom_dns.name_servers"`.
     *           When changing the DNS provider from one type to another, pass the new
     *           provider's field name as part of the field mask. For example, when changing
     *           from a Google Domains DNS configuration to a Custom DNS configuration, the
     *           `update_mask` is `"custom_dns"`. //
     *     @type bool $validate_only
     *           Validate the request without actually updating the DNS settings.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Domains\V1Beta1\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the `Registration` whose DNS settings are being updated,
     * in the format `projects/&#42;&#47;locations/&#42;&#47;registrations/&#42;`.
     *
     * Generated from protobuf field <code>string registration = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * Required. The name of the `Registration` whose DNS settings are being updated,
     * in the format `projects/&#42;&#47;locations/&#42;&#47;registrations/&#42;`.
     *
     * Generated from protobuf field <code>string registration = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRegistration($var)
    {
        GPBUtil::checkString($var, True);
        $this->registration = $var;

        return $this;
    }

    /**
     * Fields of the `DnsSettings` to update.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.DnsSettings dns_settings = 2;</code>
     * @return \Google\Cloud\Domains\V1beta1\DnsSettings|null
     */
    public function getDnsSettings()
    {
        return $this->dns_settings;
    }

    public function hasDnsSettings()
    {
        return isset($this->dns_settings);
    }

    public function clearDnsSettings()
    {
        unset($this->dns_settings);
    }

    /**
     * Fields of the `DnsSettings` to update.
     *
     * Generated from protobuf field <code>.google.cloud.domains.v1beta1.DnsSettings dns_settings = 2;</code>
     * @param \Google\Cloud\Domains\V1beta1\DnsSettings $var
     * @return $this
     */
    public function setDnsSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Domains\V1beta1\DnsSettings::class);
        $this->dns_settings = $var;

        return $this;
    }

    /**
     * Required. The field mask describing which fields to update as a comma-separated list.
     * For example, if only the name servers are being updated for an existing
     * Custom DNS configuration, the `update_mask` is
     * `"custom_dns.name_servers"`.
     * When changing the DNS provider from one type to another, pass the new
     * provider's field name as part of the field mask. For example, when changing
     * from a Google Domains DNS configuration to a Custom DNS configuration, the
     * `update_mask` is `"custom_dns"`. //
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The field mask describing which fields to update as a comma-separated list.
     * For example, if only the name servers are being updated for an existing
     * Custom DNS configuration, the `update_mask` is
     * `"custom_dns.name_servers"`.
     * When changing the DNS provider from one type to another, pass the new
     * provider's field name as part of the field mask. For example, when changing
     * from a Google Domains DNS configuration to a Custom DNS configuration, the
     * `update_mask` is `"custom_dns"`. //
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Validate the request without actually updating the DNS settings.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Validate the request without actually updating the DNS settings.
     *
     * Generated from protobuf field <code>bool validate_only = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}


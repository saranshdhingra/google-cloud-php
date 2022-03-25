<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/quota_controller.proto

namespace Google\Cloud\ServiceControl\V1\QuotaError;

use UnexpectedValueException;

/**
 * Error codes related to project config validations are deprecated since the
 * quota controller methods do not perform these validations. Instead services
 * have to call the Check method, without quota_properties field, to perform
 * these validations before calling the quota controller methods. These
 * methods check only for project deletion to be wipe out compliant.
 *
 * Protobuf type <code>google.api.servicecontrol.v1.QuotaError.Code</code>
 */
class Code
{
    /**
     * This is never used.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Quota allocation failed.
     * Same as [google.rpc.Code.RESOURCE_EXHAUSTED][google.rpc.Code.RESOURCE_EXHAUSTED].
     *
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED = 8;</code>
     */
    const RESOURCE_EXHAUSTED = 8;
    /**
     * Consumer cannot access the service because the service requires active
     * billing.
     *
     * Generated from protobuf enum <code>BILLING_NOT_ACTIVE = 107;</code>
     */
    const BILLING_NOT_ACTIVE = 107;
    /**
     * Consumer's project has been marked as deleted (soft deletion).
     *
     * Generated from protobuf enum <code>PROJECT_DELETED = 108;</code>
     */
    const PROJECT_DELETED = 108;
    /**
     * Specified API key is invalid.
     *
     * Generated from protobuf enum <code>API_KEY_INVALID = 105;</code>
     */
    const API_KEY_INVALID = 105;
    /**
     * Specified API Key has expired.
     *
     * Generated from protobuf enum <code>API_KEY_EXPIRED = 112;</code>
     */
    const API_KEY_EXPIRED = 112;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::RESOURCE_EXHAUSTED => 'RESOURCE_EXHAUSTED',
        self::BILLING_NOT_ACTIVE => 'BILLING_NOT_ACTIVE',
        self::PROJECT_DELETED => 'PROJECT_DELETED',
        self::API_KEY_INVALID => 'API_KEY_INVALID',
        self::API_KEY_EXPIRED => 'API_KEY_EXPIRED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}



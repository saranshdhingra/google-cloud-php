<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\HealthStatus;

use UnexpectedValueException;

/**
 *
 * Protobuf type <code>google.cloud.compute.v1.HealthStatus.WeightError</code>
 */
class WeightError
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_WEIGHT_ERROR = 0;</code>
     */
    const UNDEFINED_WEIGHT_ERROR = 0;
    /**
     * The response to a Health Check probe had the HTTP response header field X-Load-Balancing-Endpoint-Weight, but its content was invalid (i.e., not a non-negative single-precision floating-point number in decimal string representation).
     *
     * Generated from protobuf enum <code>INVALID_WEIGHT = 383698400;</code>
     */
    const INVALID_WEIGHT = 383698400;
    /**
     * The response to a Health Check probe did not have the HTTP response header field X-Load-Balancing-Endpoint-Weight.
     *
     * Generated from protobuf enum <code>MISSING_WEIGHT = 384027537;</code>
     */
    const MISSING_WEIGHT = 384027537;
    /**
     * This is the value when the accompanied health status is either TIMEOUT (i.e.,the Health Check probe was not able to get a response in time) or UNKNOWN. For the latter, it should be typically because there has not been sufficient time to parse and report the weight for a new backend (which is with 0.0.0.0 ip address). However, it can be also due to an outage case for which the health status is explicitly reset to UNKNOWN.
     *
     * Generated from protobuf enum <code>UNAVAILABLE_WEIGHT = 439464295;</code>
     */
    const UNAVAILABLE_WEIGHT = 439464295;
    /**
     * This is the default value when WeightReportMode is DISABLE, and is also the initial value when WeightReportMode has just updated to ENABLE or DRY_RUN and there has not been sufficient time to parse and report the backend weight.
     *
     * Generated from protobuf enum <code>WEIGHT_NONE = 502428831;</code>
     */
    const WEIGHT_NONE = 502428831;

    private static $valueToName = [
        self::UNDEFINED_WEIGHT_ERROR => 'UNDEFINED_WEIGHT_ERROR',
        self::INVALID_WEIGHT => 'INVALID_WEIGHT',
        self::MISSING_WEIGHT => 'MISSING_WEIGHT',
        self::UNAVAILABLE_WEIGHT => 'UNAVAILABLE_WEIGHT',
        self::WEIGHT_NONE => 'WEIGHT_NONE',
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



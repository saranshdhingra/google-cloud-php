<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/confidentialcomputing/v1/service.proto

namespace Google\Cloud\ConfidentialComputing\V1;

use UnexpectedValueException;

/**
 * SigningAlgorithm enumerates all the supported signing algorithms.
 *
 * Protobuf type <code>google.cloud.confidentialcomputing.v1.SigningAlgorithm</code>
 */
class SigningAlgorithm
{
    /**
     * Unspecified signing algorithm.
     *
     * Generated from protobuf enum <code>SIGNING_ALGORITHM_UNSPECIFIED = 0;</code>
     */
    const SIGNING_ALGORITHM_UNSPECIFIED = 0;
    /**
     * RSASSA-PSS with a SHA256 digest.
     *
     * Generated from protobuf enum <code>RSASSA_PSS_SHA256 = 1;</code>
     */
    const RSASSA_PSS_SHA256 = 1;
    /**
     * RSASSA-PKCS1 v1.5 with a SHA256 digest.
     *
     * Generated from protobuf enum <code>RSASSA_PKCS1V15_SHA256 = 2;</code>
     */
    const RSASSA_PKCS1V15_SHA256 = 2;
    /**
     * ECDSA on the P-256 Curve with a SHA256 digest.
     *
     * Generated from protobuf enum <code>ECDSA_P256_SHA256 = 3;</code>
     */
    const ECDSA_P256_SHA256 = 3;

    private static $valueToName = [
        self::SIGNING_ALGORITHM_UNSPECIFIED => 'SIGNING_ALGORITHM_UNSPECIFIED',
        self::RSASSA_PSS_SHA256 => 'RSASSA_PSS_SHA256',
        self::RSASSA_PKCS1V15_SHA256 => 'RSASSA_PKCS1V15_SHA256',
        self::ECDSA_P256_SHA256 => 'ECDSA_P256_SHA256',
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


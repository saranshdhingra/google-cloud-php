<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/workflows/v1/workflows.proto

namespace Google\Cloud\Workflows\V1\Workflow\StateError;

use UnexpectedValueException;

/**
 * Describes the possibled types of a state error.
 *
 * Protobuf type <code>google.cloud.workflows.v1.Workflow.StateError.Type</code>
 */
class Type
{
    /**
     * No type specified.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Caused by an issue with KMS.
     *
     * Generated from protobuf enum <code>KMS_ERROR = 1;</code>
     */
    const KMS_ERROR = 1;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::KMS_ERROR => 'KMS_ERROR',
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



<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/backup_plan.proto

namespace Google\Cloud\GkeBackup\V1\BackupPlan;

use UnexpectedValueException;

/**
 * State
 *
 * Protobuf type <code>google.cloud.gkebackup.v1.BackupPlan.State</code>
 */
class State
{
    /**
     * Default first value for Enums.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Waiting for cluster state to be RUNNING.
     *
     * Generated from protobuf enum <code>CLUSTER_PENDING = 1;</code>
     */
    const CLUSTER_PENDING = 1;
    /**
     * The BackupPlan is in the process of being created.
     *
     * Generated from protobuf enum <code>PROVISIONING = 2;</code>
     */
    const PROVISIONING = 2;
    /**
     * The BackupPlan has successfully been created and is ready for Backups.
     *
     * Generated from protobuf enum <code>READY = 3;</code>
     */
    const READY = 3;
    /**
     * BackupPlan creation has failed.
     *
     * Generated from protobuf enum <code>FAILED = 4;</code>
     */
    const FAILED = 4;
    /**
     * The BackupPlan has been deactivated.
     *
     * Generated from protobuf enum <code>DEACTIVATED = 5;</code>
     */
    const DEACTIVATED = 5;
    /**
     * The BackupPlan is in the process of being deleted.
     *
     * Generated from protobuf enum <code>DELETING = 6;</code>
     */
    const DELETING = 6;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CLUSTER_PENDING => 'CLUSTER_PENDING',
        self::PROVISIONING => 'PROVISIONING',
        self::READY => 'READY',
        self::FAILED => 'FAILED',
        self::DEACTIVATED => 'DEACTIVATED',
        self::DELETING => 'DELETING',
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



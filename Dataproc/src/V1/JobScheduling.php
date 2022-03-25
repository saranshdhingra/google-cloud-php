<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Job scheduling options.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.JobScheduling</code>
 */
class JobScheduling extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Maximum number of times per hour a driver may be restarted as
     * a result of driver exiting with non-zero code before job is
     * reported failed.
     * A job may be reported as thrashing if driver exits with non-zero code
     * 4 times within 10 minute window.
     * Maximum value is 10.
     * **Note:** Currently, this restartable job option is
     * not supported in Dataproc
     * [workflow
     * template](https://cloud.google.com/dataproc/docs/concepts/workflows/using-workflows#adding_jobs_to_a_template)
     * jobs.
     *
     * Generated from protobuf field <code>int32 max_failures_per_hour = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $max_failures_per_hour = 0;
    /**
     * Optional. Maximum number of times in total a driver may be restarted as a result of
     * driver exiting with non-zero code before job is reported failed.
     * Maximum value is 240.
     * **Note:** Currently, this restartable job option is
     * not supported in Dataproc
     * [workflow
     * template](https://cloud.google.com/dataproc/docs/concepts/workflows/using-workflows#adding_jobs_to_a_template)
     * jobs.
     *
     * Generated from protobuf field <code>int32 max_failures_total = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $max_failures_total = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $max_failures_per_hour
     *           Optional. Maximum number of times per hour a driver may be restarted as
     *           a result of driver exiting with non-zero code before job is
     *           reported failed.
     *           A job may be reported as thrashing if driver exits with non-zero code
     *           4 times within 10 minute window.
     *           Maximum value is 10.
     *           **Note:** Currently, this restartable job option is
     *           not supported in Dataproc
     *           [workflow
     *           template](https://cloud.google.com/dataproc/docs/concepts/workflows/using-workflows#adding_jobs_to_a_template)
     *           jobs.
     *     @type int $max_failures_total
     *           Optional. Maximum number of times in total a driver may be restarted as a result of
     *           driver exiting with non-zero code before job is reported failed.
     *           Maximum value is 240.
     *           **Note:** Currently, this restartable job option is
     *           not supported in Dataproc
     *           [workflow
     *           template](https://cloud.google.com/dataproc/docs/concepts/workflows/using-workflows#adding_jobs_to_a_template)
     *           jobs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Maximum number of times per hour a driver may be restarted as
     * a result of driver exiting with non-zero code before job is
     * reported failed.
     * A job may be reported as thrashing if driver exits with non-zero code
     * 4 times within 10 minute window.
     * Maximum value is 10.
     * **Note:** Currently, this restartable job option is
     * not supported in Dataproc
     * [workflow
     * template](https://cloud.google.com/dataproc/docs/concepts/workflows/using-workflows#adding_jobs_to_a_template)
     * jobs.
     *
     * Generated from protobuf field <code>int32 max_failures_per_hour = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMaxFailuresPerHour()
    {
        return $this->max_failures_per_hour;
    }

    /**
     * Optional. Maximum number of times per hour a driver may be restarted as
     * a result of driver exiting with non-zero code before job is
     * reported failed.
     * A job may be reported as thrashing if driver exits with non-zero code
     * 4 times within 10 minute window.
     * Maximum value is 10.
     * **Note:** Currently, this restartable job option is
     * not supported in Dataproc
     * [workflow
     * template](https://cloud.google.com/dataproc/docs/concepts/workflows/using-workflows#adding_jobs_to_a_template)
     * jobs.
     *
     * Generated from protobuf field <code>int32 max_failures_per_hour = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxFailuresPerHour($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_failures_per_hour = $var;

        return $this;
    }

    /**
     * Optional. Maximum number of times in total a driver may be restarted as a result of
     * driver exiting with non-zero code before job is reported failed.
     * Maximum value is 240.
     * **Note:** Currently, this restartable job option is
     * not supported in Dataproc
     * [workflow
     * template](https://cloud.google.com/dataproc/docs/concepts/workflows/using-workflows#adding_jobs_to_a_template)
     * jobs.
     *
     * Generated from protobuf field <code>int32 max_failures_total = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getMaxFailuresTotal()
    {
        return $this->max_failures_total;
    }

    /**
     * Optional. Maximum number of times in total a driver may be restarted as a result of
     * driver exiting with non-zero code before job is reported failed.
     * Maximum value is 240.
     * **Note:** Currently, this restartable job option is
     * not supported in Dataproc
     * [workflow
     * template](https://cloud.google.com/dataproc/docs/concepts/workflows/using-workflows#adding_jobs_to_a_template)
     * jobs.
     *
     * Generated from protobuf field <code>int32 max_failures_total = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxFailuresTotal($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_failures_total = $var;

        return $this;
    }

}


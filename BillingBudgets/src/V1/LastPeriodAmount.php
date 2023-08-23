<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/budgets/v1/budget_model.proto

namespace Google\Cloud\Billing\Budgets\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a budget amount targeted to the last
 * [Filter.calendar_period][google.cloud.billing.budgets.v1.Filter.calendar_period]
 * spend. At this time, the amount is automatically 100% of the last calendar
 * period's spend; that is, there are no other options yet.
 * LastPeriodAmount cannot be set for a budget configured with
 * a
 * [Filter.custom_period][google.cloud.billing.budgets.v1.Filter.custom_period].
 *
 * Generated from protobuf message <code>google.cloud.billing.budgets.v1.LastPeriodAmount</code>
 */
class LastPeriodAmount extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Billing\Budgets\V1\BudgetModel::initOnce();
        parent::__construct($data);
    }

}


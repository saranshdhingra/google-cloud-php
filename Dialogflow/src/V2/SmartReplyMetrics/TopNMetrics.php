<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_model.proto

namespace Google\Cloud\Dialogflow\V2\SmartReplyMetrics;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Evaluation metrics when retrieving `n` smart replies with the model.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.SmartReplyMetrics.TopNMetrics</code>
 */
class TopNMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of retrieved smart replies. For example, when `n` is 3, this
     * evaluation contains metrics for when Dialogflow retrieves 3 smart replies
     * with the model.
     *
     * Generated from protobuf field <code>int32 n = 1;</code>
     */
    private $n = 0;
    /**
     * Defined as `number of queries whose top n smart replies have at least one
     * similar (token match similarity above the defined threshold) reply as the
     * real reply` divided by `number of queries with at least one smart reply`.
     * Value ranges from 0.0 to 1.0 inclusive.
     *
     * Generated from protobuf field <code>float recall = 2;</code>
     */
    private $recall = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $n
     *           Number of retrieved smart replies. For example, when `n` is 3, this
     *           evaluation contains metrics for when Dialogflow retrieves 3 smart replies
     *           with the model.
     *     @type float $recall
     *           Defined as `number of queries whose top n smart replies have at least one
     *           similar (token match similarity above the defined threshold) reply as the
     *           real reply` divided by `number of queries with at least one smart reply`.
     *           Value ranges from 0.0 to 1.0 inclusive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationModel::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of retrieved smart replies. For example, when `n` is 3, this
     * evaluation contains metrics for when Dialogflow retrieves 3 smart replies
     * with the model.
     *
     * Generated from protobuf field <code>int32 n = 1;</code>
     * @return int
     */
    public function getN()
    {
        return $this->n;
    }

    /**
     * Number of retrieved smart replies. For example, when `n` is 3, this
     * evaluation contains metrics for when Dialogflow retrieves 3 smart replies
     * with the model.
     *
     * Generated from protobuf field <code>int32 n = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setN($var)
    {
        GPBUtil::checkInt32($var);
        $this->n = $var;

        return $this;
    }

    /**
     * Defined as `number of queries whose top n smart replies have at least one
     * similar (token match similarity above the defined threshold) reply as the
     * real reply` divided by `number of queries with at least one smart reply`.
     * Value ranges from 0.0 to 1.0 inclusive.
     *
     * Generated from protobuf field <code>float recall = 2;</code>
     * @return float
     */
    public function getRecall()
    {
        return $this->recall;
    }

    /**
     * Defined as `number of queries whose top n smart replies have at least one
     * similar (token match similarity above the defined threshold) reply as the
     * real reply` divided by `number of queries with at least one smart reply`.
     * Value ranges from 0.0 to 1.0 inclusive.
     *
     * Generated from protobuf field <code>float recall = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setRecall($var)
    {
        GPBUtil::checkFloat($var);
        $this->recall = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TopNMetrics::class, \Google\Cloud\Dialogflow\V2\SmartReplyMetrics_TopNMetrics::class);


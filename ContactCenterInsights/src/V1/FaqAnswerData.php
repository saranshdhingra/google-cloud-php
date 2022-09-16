<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Agent Assist frequently-asked-question answer data.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.FaqAnswerData</code>
 */
class FaqAnswerData extends \Google\Protobuf\Internal\Message
{
    /**
     * The piece of text from the `source` knowledge base document.
     *
     * Generated from protobuf field <code>string answer = 1;</code>
     */
    private $answer = '';
    /**
     * The system's confidence score that this answer is a good match for this
     * conversation, ranging from 0.0 (completely uncertain) to 1.0 (completely
     * certain).
     *
     * Generated from protobuf field <code>float confidence_score = 2;</code>
     */
    private $confidence_score = 0.0;
    /**
     * The corresponding FAQ question.
     *
     * Generated from protobuf field <code>string question = 3;</code>
     */
    private $question = '';
    /**
     * Map that contains metadata about the FAQ answer and the document that
     * it originates from.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 4;</code>
     */
    private $metadata;
    /**
     * The name of the answer record.
     * Format:
     * projects/{project}/locations/{location}/answerRecords/{answer_record}
     *
     * Generated from protobuf field <code>string query_record = 5;</code>
     */
    private $query_record = '';
    /**
     * The knowledge document that this answer was extracted from.
     * Format:
     * projects/{project}/knowledgeBases/{knowledge_base}/documents/{document}.
     *
     * Generated from protobuf field <code>string source = 6;</code>
     */
    private $source = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $answer
     *           The piece of text from the `source` knowledge base document.
     *     @type float $confidence_score
     *           The system's confidence score that this answer is a good match for this
     *           conversation, ranging from 0.0 (completely uncertain) to 1.0 (completely
     *           certain).
     *     @type string $question
     *           The corresponding FAQ question.
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           Map that contains metadata about the FAQ answer and the document that
     *           it originates from.
     *     @type string $query_record
     *           The name of the answer record.
     *           Format:
     *           projects/{project}/locations/{location}/answerRecords/{answer_record}
     *     @type string $source
     *           The knowledge document that this answer was extracted from.
     *           Format:
     *           projects/{project}/knowledgeBases/{knowledge_base}/documents/{document}.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The piece of text from the `source` knowledge base document.
     *
     * Generated from protobuf field <code>string answer = 1;</code>
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * The piece of text from the `source` knowledge base document.
     *
     * Generated from protobuf field <code>string answer = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAnswer($var)
    {
        GPBUtil::checkString($var, True);
        $this->answer = $var;

        return $this;
    }

    /**
     * The system's confidence score that this answer is a good match for this
     * conversation, ranging from 0.0 (completely uncertain) to 1.0 (completely
     * certain).
     *
     * Generated from protobuf field <code>float confidence_score = 2;</code>
     * @return float
     */
    public function getConfidenceScore()
    {
        return $this->confidence_score;
    }

    /**
     * The system's confidence score that this answer is a good match for this
     * conversation, ranging from 0.0 (completely uncertain) to 1.0 (completely
     * certain).
     *
     * Generated from protobuf field <code>float confidence_score = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidenceScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence_score = $var;

        return $this;
    }

    /**
     * The corresponding FAQ question.
     *
     * Generated from protobuf field <code>string question = 3;</code>
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * The corresponding FAQ question.
     *
     * Generated from protobuf field <code>string question = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setQuestion($var)
    {
        GPBUtil::checkString($var, True);
        $this->question = $var;

        return $this;
    }

    /**
     * Map that contains metadata about the FAQ answer and the document that
     * it originates from.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Map that contains metadata about the FAQ answer and the document that
     * it originates from.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * The name of the answer record.
     * Format:
     * projects/{project}/locations/{location}/answerRecords/{answer_record}
     *
     * Generated from protobuf field <code>string query_record = 5;</code>
     * @return string
     */
    public function getQueryRecord()
    {
        return $this->query_record;
    }

    /**
     * The name of the answer record.
     * Format:
     * projects/{project}/locations/{location}/answerRecords/{answer_record}
     *
     * Generated from protobuf field <code>string query_record = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryRecord($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_record = $var;

        return $this;
    }

    /**
     * The knowledge document that this answer was extracted from.
     * Format:
     * projects/{project}/knowledgeBases/{knowledge_base}/documents/{document}.
     *
     * Generated from protobuf field <code>string source = 6;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The knowledge document that this answer was extracted from.
     * Format:
     * projects/{project}/knowledgeBases/{knowledge_base}/documents/{document}.
     *
     * Generated from protobuf field <code>string source = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represent user-facing validation result message.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.ValidationMessage</code>
 */
class ValidationMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * The result of the validation.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     */
    private $message = '';
    /**
     * Message severity level (warning or error).
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.ValidationMessage.Level level = 2;</code>
     */
    private $level = 0;
    /**
     * Additional metadata related to the result.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     */
    private $metadata;
    /**
     * A custom code identifying this specific message.
     *
     * Generated from protobuf field <code>string code = 4;</code>
     */
    private $code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *           The result of the validation.
     *     @type int $level
     *           Message severity level (warning or error).
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           Additional metadata related to the result.
     *     @type string $code
     *           A custom code identifying this specific message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * The result of the validation.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * The result of the validation.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Message severity level (warning or error).
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.ValidationMessage.Level level = 2;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Message severity level (warning or error).
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.ValidationMessage.Level level = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastream\V1\ValidationMessage\Level::class);
        $this->level = $var;

        return $this;
    }

    /**
     * Additional metadata related to the result.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Additional metadata related to the result.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
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
     * A custom code identifying this specific message.
     *
     * Generated from protobuf field <code>string code = 4;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A custom code identifying this specific message.
     *
     * Generated from protobuf field <code>string code = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

}


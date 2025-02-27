<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [PredictionService.CountTokens][].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CountTokensRequest</code>
 */
class CountTokensRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Endpoint requested to perform token counting.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $endpoint = '';
    /**
     * Required. The instances that are the input to token counting call.
     * Schema is identical to the prediction schema of the underlying model.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value instances = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instances;

    /**
     * @param string                   $endpoint  Required. The name of the Endpoint requested to perform token counting.
     *                                            Format:
     *                                            `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *                                            Please see {@see LlmUtilityServiceClient::endpointName()} for help formatting this field.
     * @param \Google\Protobuf\Value[] $instances Required. The instances that are the input to token counting call.
     *                                            Schema is identical to the prediction schema of the underlying model.
     *
     * @return \Google\Cloud\AIPlatform\V1\CountTokensRequest
     *
     * @experimental
     */
    public static function build(string $endpoint, array $instances): self
    {
        return (new self())
            ->setEndpoint($endpoint)
            ->setInstances($instances);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $endpoint
     *           Required. The name of the Endpoint requested to perform token counting.
     *           Format:
     *           `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *     @type array<\Google\Protobuf\Value>|\Google\Protobuf\Internal\RepeatedField $instances
     *           Required. The instances that are the input to token counting call.
     *           Schema is identical to the prediction schema of the underlying model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PredictionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Endpoint requested to perform token counting.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Required. The name of the Endpoint requested to perform token counting.
     * Format:
     * `projects/{project}/locations/{location}/endpoints/{endpoint}`
     *
     * Generated from protobuf field <code>string endpoint = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * Required. The instances that are the input to token counting call.
     * Schema is identical to the prediction schema of the underlying model.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value instances = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * Required. The instances that are the input to token counting call.
     * Schema is identical to the prediction schema of the underlying model.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Value instances = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Protobuf\Value>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->instances = $arr;

        return $this;
    }

}


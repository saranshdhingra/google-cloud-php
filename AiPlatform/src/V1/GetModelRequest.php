<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ModelService.GetModel][google.cloud.aiplatform.v1.ModelService.GetModel].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.GetModelRequest</code>
 */
class GetModelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Model resource.
     * Format: `projects/{project}/locations/{location}/models/{model}`
     * In order to retrieve a specific version of the model, also provide
     * the version ID or version alias.
     *   Example: `projects/{project}/locations/{location}/models/{model}&#64;2`
     *              or
     *            `projects/{project}/locations/{location}/models/{model}&#64;golden`
     * If no version ID or alias is specified, the "default" version will be
     * returned. The "default" version alias is created for the first version of
     * the model, and can be moved to other versions later on. There will be
     * exactly one default version.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * @param string $name Required. The name of the Model resource.
     *                     Format: `projects/{project}/locations/{location}/models/{model}`
     *
     *                     In order to retrieve a specific version of the model, also provide
     *                     the version ID or version alias.
     *                     Example: `projects/{project}/locations/{location}/models/{model}&#64;2`
     *                     or
     *                     `projects/{project}/locations/{location}/models/{model}&#64;golden`
     *                     If no version ID or alias is specified, the "default" version will be
     *                     returned. The "default" version alias is created for the first version of
     *                     the model, and can be moved to other versions later on. There will be
     *                     exactly one default version. Please see
     *                     {@see ModelServiceClient::modelName()} for help formatting this field.
     *
     * @return \Google\Cloud\AIPlatform\V1\GetModelRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the Model resource.
     *           Format: `projects/{project}/locations/{location}/models/{model}`
     *           In order to retrieve a specific version of the model, also provide
     *           the version ID or version alias.
     *             Example: `projects/{project}/locations/{location}/models/{model}&#64;2`
     *                        or
     *                      `projects/{project}/locations/{location}/models/{model}&#64;golden`
     *           If no version ID or alias is specified, the "default" version will be
     *           returned. The "default" version alias is created for the first version of
     *           the model, and can be moved to other versions later on. There will be
     *           exactly one default version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Model resource.
     * Format: `projects/{project}/locations/{location}/models/{model}`
     * In order to retrieve a specific version of the model, also provide
     * the version ID or version alias.
     *   Example: `projects/{project}/locations/{location}/models/{model}&#64;2`
     *              or
     *            `projects/{project}/locations/{location}/models/{model}&#64;golden`
     * If no version ID or alias is specified, the "default" version will be
     * returned. The "default" version alias is created for the first version of
     * the model, and can be moved to other versions later on. There will be
     * exactly one default version.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the Model resource.
     * Format: `projects/{project}/locations/{location}/models/{model}`
     * In order to retrieve a specific version of the model, also provide
     * the version ID or version alias.
     *   Example: `projects/{project}/locations/{location}/models/{model}&#64;2`
     *              or
     *            `projects/{project}/locations/{location}/models/{model}&#64;golden`
     * If no version ID or alias is specified, the "default" version will be
     * returned. The "default" version alias is created for the first version of
     * the model, and can be moved to other versions later on. There will be
     * exactly one default version.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}


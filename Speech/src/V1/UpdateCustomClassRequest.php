<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech_adaptation.proto

namespace Google\Cloud\Speech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message sent by the client for the `UpdateCustomClass` method.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1.UpdateCustomClassRequest</code>
 */
class UpdateCustomClassRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The custom class to update.
     * The custom class's `name` field is used to identify the custom class to be
     * updated. Format:
     * `projects/{project}/locations/{location}/customClasses/{custom_class}`
     * Speech-to-Text supports three locations: `global`, `us` (US North America),
     * and `eu` (Europe). If you are calling the `speech.googleapis.com`
     * endpoint, use the `global` location. To specify a region, use a
     * [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints)
     * with matching `us` or `eu` location value.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.CustomClass custom_class = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $custom_class = null;
    /**
     * The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\Speech\V1\CustomClass $customClass Required. The custom class to update.
     *
     *                                                         The custom class's `name` field is used to identify the custom class to be
     *                                                         updated. Format:
     *
     *                                                         `projects/{project}/locations/{location}/customClasses/{custom_class}`
     *
     *                                                         Speech-to-Text supports three locations: `global`, `us` (US North America),
     *                                                         and `eu` (Europe). If you are calling the `speech.googleapis.com`
     *                                                         endpoint, use the `global` location. To specify a region, use a
     *                                                         [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints)
     *                                                         with matching `us` or `eu` location value.
     * @param \Google\Protobuf\FieldMask          $updateMask  The list of fields to be updated.
     *
     * @return \Google\Cloud\Speech\V1\UpdateCustomClassRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Speech\V1\CustomClass $customClass, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setCustomClass($customClass)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Speech\V1\CustomClass $custom_class
     *           Required. The custom class to update.
     *           The custom class's `name` field is used to identify the custom class to be
     *           updated. Format:
     *           `projects/{project}/locations/{location}/customClasses/{custom_class}`
     *           Speech-to-Text supports three locations: `global`, `us` (US North America),
     *           and `eu` (Europe). If you are calling the `speech.googleapis.com`
     *           endpoint, use the `global` location. To specify a region, use a
     *           [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints)
     *           with matching `us` or `eu` location value.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The list of fields to be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1\CloudSpeechAdaptation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The custom class to update.
     * The custom class's `name` field is used to identify the custom class to be
     * updated. Format:
     * `projects/{project}/locations/{location}/customClasses/{custom_class}`
     * Speech-to-Text supports three locations: `global`, `us` (US North America),
     * and `eu` (Europe). If you are calling the `speech.googleapis.com`
     * endpoint, use the `global` location. To specify a region, use a
     * [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints)
     * with matching `us` or `eu` location value.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.CustomClass custom_class = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Speech\V1\CustomClass|null
     */
    public function getCustomClass()
    {
        return $this->custom_class;
    }

    public function hasCustomClass()
    {
        return isset($this->custom_class);
    }

    public function clearCustomClass()
    {
        unset($this->custom_class);
    }

    /**
     * Required. The custom class to update.
     * The custom class's `name` field is used to identify the custom class to be
     * updated. Format:
     * `projects/{project}/locations/{location}/customClasses/{custom_class}`
     * Speech-to-Text supports three locations: `global`, `us` (US North America),
     * and `eu` (Europe). If you are calling the `speech.googleapis.com`
     * endpoint, use the `global` location. To specify a region, use a
     * [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints)
     * with matching `us` or `eu` location value.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.CustomClass custom_class = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Speech\V1\CustomClass $var
     * @return $this
     */
    public function setCustomClass($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V1\CustomClass::class);
        $this->custom_class = $var;

        return $this;
    }

    /**
     * The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}


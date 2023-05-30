<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech_adaptation.proto

namespace Google\Cloud\Speech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message sent by the client for the `UpdatePhraseSet` method.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1.UpdatePhraseSetRequest</code>
 */
class UpdatePhraseSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The phrase set to update.
     * The phrase set's `name` field is used to identify the set to be
     * updated. Format:
     * `projects/{project}/locations/{location}/phraseSets/{phrase_set}`
     * Speech-to-Text supports three locations: `global`, `us` (US North America),
     * and `eu` (Europe). If you are calling the `speech.googleapis.com`
     * endpoint, use the `global` location. To specify a region, use a
     * [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints)
     * with matching `us` or `eu` location value.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.PhraseSet phrase_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $phrase_set = null;
    /**
     * The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\Speech\V1\PhraseSet $phraseSet  Required. The phrase set to update.
     *
     *                                                      The phrase set's `name` field is used to identify the set to be
     *                                                      updated. Format:
     *
     *                                                      `projects/{project}/locations/{location}/phraseSets/{phrase_set}`
     *
     *                                                      Speech-to-Text supports three locations: `global`, `us` (US North America),
     *                                                      and `eu` (Europe). If you are calling the `speech.googleapis.com`
     *                                                      endpoint, use the `global` location. To specify a region, use a
     *                                                      [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints)
     *                                                      with matching `us` or `eu` location value.
     * @param \Google\Protobuf\FieldMask        $updateMask The list of fields to be updated.
     *
     * @return \Google\Cloud\Speech\V1\UpdatePhraseSetRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Speech\V1\PhraseSet $phraseSet, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setPhraseSet($phraseSet)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Speech\V1\PhraseSet $phrase_set
     *           Required. The phrase set to update.
     *           The phrase set's `name` field is used to identify the set to be
     *           updated. Format:
     *           `projects/{project}/locations/{location}/phraseSets/{phrase_set}`
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
     * Required. The phrase set to update.
     * The phrase set's `name` field is used to identify the set to be
     * updated. Format:
     * `projects/{project}/locations/{location}/phraseSets/{phrase_set}`
     * Speech-to-Text supports three locations: `global`, `us` (US North America),
     * and `eu` (Europe). If you are calling the `speech.googleapis.com`
     * endpoint, use the `global` location. To specify a region, use a
     * [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints)
     * with matching `us` or `eu` location value.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.PhraseSet phrase_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Speech\V1\PhraseSet|null
     */
    public function getPhraseSet()
    {
        return $this->phrase_set;
    }

    public function hasPhraseSet()
    {
        return isset($this->phrase_set);
    }

    public function clearPhraseSet()
    {
        unset($this->phrase_set);
    }

    /**
     * Required. The phrase set to update.
     * The phrase set's `name` field is used to identify the set to be
     * updated. Format:
     * `projects/{project}/locations/{location}/phraseSets/{phrase_set}`
     * Speech-to-Text supports three locations: `global`, `us` (US North America),
     * and `eu` (Europe). If you are calling the `speech.googleapis.com`
     * endpoint, use the `global` location. To specify a region, use a
     * [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints)
     * with matching `us` or `eu` location value.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.PhraseSet phrase_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Speech\V1\PhraseSet $var
     * @return $this
     */
    public function setPhraseSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V1\PhraseSet::class);
        $this->phrase_set = $var;

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


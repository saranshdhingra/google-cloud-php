<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Participants.AnalyzeContent][google.cloud.dialogflow.v2.Participants.AnalyzeContent].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.AnalyzeContentRequest</code>
 */
class AnalyzeContentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the participant this text comes from.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/participants/<Participant ID>`.
     *
     * Generated from protobuf field <code>string participant = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $participant = '';
    /**
     * Speech synthesis configuration.
     * The speech synthesis settings for a virtual agent that may be configured
     * for the associated conversation profile are not used when calling
     * AnalyzeContent. If this configuration is not supplied, speech synthesis
     * is disabled.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig reply_audio_config = 5;</code>
     */
    private $reply_audio_config = null;
    /**
     * Parameters for a Dialogflow virtual-agent query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryParameters query_params = 9;</code>
     */
    private $query_params = null;
    /**
     * Parameters for a human assist query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AssistQueryParameters assist_query_params = 14;</code>
     */
    private $assist_query_params = null;
    /**
     * Additional parameters to be put into Dialogflow CX session parameters. To
     * remove a parameter from the session, clients should explicitly set the
     * parameter value to null.
     * Note: this field should only be used if you are connecting to a Dialogflow
     * CX agent.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct cx_parameters = 18;</code>
     */
    private $cx_parameters = null;
    /**
     * A unique identifier for this request. Restricted to 36 ASCII characters.
     * A random UUID is recommended.
     * This request is only idempotent if a `request_id` is provided.
     *
     * Generated from protobuf field <code>string request_id = 11;</code>
     */
    private $request_id = '';
    protected $input;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $participant
     *           Required. The name of the participant this text comes from.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/conversations/<Conversation ID>/participants/<Participant ID>`.
     *     @type \Google\Cloud\Dialogflow\V2\TextInput $text_input
     *           The natural language text to be processed.
     *     @type \Google\Cloud\Dialogflow\V2\EventInput $event_input
     *           An input event to send to Dialogflow.
     *     @type \Google\Cloud\Dialogflow\V2\OutputAudioConfig $reply_audio_config
     *           Speech synthesis configuration.
     *           The speech synthesis settings for a virtual agent that may be configured
     *           for the associated conversation profile are not used when calling
     *           AnalyzeContent. If this configuration is not supplied, speech synthesis
     *           is disabled.
     *     @type \Google\Cloud\Dialogflow\V2\QueryParameters $query_params
     *           Parameters for a Dialogflow virtual-agent query.
     *     @type \Google\Cloud\Dialogflow\V2\AssistQueryParameters $assist_query_params
     *           Parameters for a human assist query.
     *     @type \Google\Protobuf\Struct $cx_parameters
     *           Additional parameters to be put into Dialogflow CX session parameters. To
     *           remove a parameter from the session, clients should explicitly set the
     *           parameter value to null.
     *           Note: this field should only be used if you are connecting to a Dialogflow
     *           CX agent.
     *     @type string $request_id
     *           A unique identifier for this request. Restricted to 36 ASCII characters.
     *           A random UUID is recommended.
     *           This request is only idempotent if a `request_id` is provided.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the participant this text comes from.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/participants/<Participant ID>`.
     *
     * Generated from protobuf field <code>string participant = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Required. The name of the participant this text comes from.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/conversations/<Conversation ID>/participants/<Participant ID>`.
     *
     * Generated from protobuf field <code>string participant = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParticipant($var)
    {
        GPBUtil::checkString($var, True);
        $this->participant = $var;

        return $this;
    }

    /**
     * The natural language text to be processed.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.TextInput text_input = 6;</code>
     * @return \Google\Cloud\Dialogflow\V2\TextInput|null
     */
    public function getTextInput()
    {
        return $this->readOneof(6);
    }

    public function hasTextInput()
    {
        return $this->hasOneof(6);
    }

    /**
     * The natural language text to be processed.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.TextInput text_input = 6;</code>
     * @param \Google\Cloud\Dialogflow\V2\TextInput $var
     * @return $this
     */
    public function setTextInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\TextInput::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * An input event to send to Dialogflow.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EventInput event_input = 8;</code>
     * @return \Google\Cloud\Dialogflow\V2\EventInput|null
     */
    public function getEventInput()
    {
        return $this->readOneof(8);
    }

    public function hasEventInput()
    {
        return $this->hasOneof(8);
    }

    /**
     * An input event to send to Dialogflow.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EventInput event_input = 8;</code>
     * @param \Google\Cloud\Dialogflow\V2\EventInput $var
     * @return $this
     */
    public function setEventInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\EventInput::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Speech synthesis configuration.
     * The speech synthesis settings for a virtual agent that may be configured
     * for the associated conversation profile are not used when calling
     * AnalyzeContent. If this configuration is not supplied, speech synthesis
     * is disabled.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig reply_audio_config = 5;</code>
     * @return \Google\Cloud\Dialogflow\V2\OutputAudioConfig|null
     */
    public function getReplyAudioConfig()
    {
        return $this->reply_audio_config;
    }

    public function hasReplyAudioConfig()
    {
        return isset($this->reply_audio_config);
    }

    public function clearReplyAudioConfig()
    {
        unset($this->reply_audio_config);
    }

    /**
     * Speech synthesis configuration.
     * The speech synthesis settings for a virtual agent that may be configured
     * for the associated conversation profile are not used when calling
     * AnalyzeContent. If this configuration is not supplied, speech synthesis
     * is disabled.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.OutputAudioConfig reply_audio_config = 5;</code>
     * @param \Google\Cloud\Dialogflow\V2\OutputAudioConfig $var
     * @return $this
     */
    public function setReplyAudioConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\OutputAudioConfig::class);
        $this->reply_audio_config = $var;

        return $this;
    }

    /**
     * Parameters for a Dialogflow virtual-agent query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryParameters query_params = 9;</code>
     * @return \Google\Cloud\Dialogflow\V2\QueryParameters|null
     */
    public function getQueryParams()
    {
        return $this->query_params;
    }

    public function hasQueryParams()
    {
        return isset($this->query_params);
    }

    public function clearQueryParams()
    {
        unset($this->query_params);
    }

    /**
     * Parameters for a Dialogflow virtual-agent query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.QueryParameters query_params = 9;</code>
     * @param \Google\Cloud\Dialogflow\V2\QueryParameters $var
     * @return $this
     */
    public function setQueryParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\QueryParameters::class);
        $this->query_params = $var;

        return $this;
    }

    /**
     * Parameters for a human assist query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AssistQueryParameters assist_query_params = 14;</code>
     * @return \Google\Cloud\Dialogflow\V2\AssistQueryParameters|null
     */
    public function getAssistQueryParams()
    {
        return $this->assist_query_params;
    }

    public function hasAssistQueryParams()
    {
        return isset($this->assist_query_params);
    }

    public function clearAssistQueryParams()
    {
        unset($this->assist_query_params);
    }

    /**
     * Parameters for a human assist query.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.AssistQueryParameters assist_query_params = 14;</code>
     * @param \Google\Cloud\Dialogflow\V2\AssistQueryParameters $var
     * @return $this
     */
    public function setAssistQueryParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\AssistQueryParameters::class);
        $this->assist_query_params = $var;

        return $this;
    }

    /**
     * Additional parameters to be put into Dialogflow CX session parameters. To
     * remove a parameter from the session, clients should explicitly set the
     * parameter value to null.
     * Note: this field should only be used if you are connecting to a Dialogflow
     * CX agent.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct cx_parameters = 18;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getCxParameters()
    {
        return $this->cx_parameters;
    }

    public function hasCxParameters()
    {
        return isset($this->cx_parameters);
    }

    public function clearCxParameters()
    {
        unset($this->cx_parameters);
    }

    /**
     * Additional parameters to be put into Dialogflow CX session parameters. To
     * remove a parameter from the session, clients should explicitly set the
     * parameter value to null.
     * Note: this field should only be used if you are connecting to a Dialogflow
     * CX agent.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct cx_parameters = 18;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setCxParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->cx_parameters = $var;

        return $this;
    }

    /**
     * A unique identifier for this request. Restricted to 36 ASCII characters.
     * A random UUID is recommended.
     * This request is only idempotent if a `request_id` is provided.
     *
     * Generated from protobuf field <code>string request_id = 11;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A unique identifier for this request. Restricted to 36 ASCII characters.
     * A random UUID is recommended.
     * This request is only idempotent if a `request_id` is provided.
     *
     * Generated from protobuf field <code>string request_id = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getInput()
    {
        return $this->whichOneof("input");
    }

}


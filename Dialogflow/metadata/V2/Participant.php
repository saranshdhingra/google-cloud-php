<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/participant.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class Participant
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\AudioConfig::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Gcs::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Session::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�H
,google/cloud/dialogflow/v2/participant.protogoogle.cloud.dialogflow.v2google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto-google/cloud/dialogflow/v2/audio_config.proto$google/cloud/dialogflow/v2/gcs.proto(google/cloud/dialogflow/v2/session.protogoogle/protobuf/any.protogoogle/protobuf/duration.proto google/protobuf/field_mask.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"�
Participant
name (	B�A?
role (2,.google.cloud.dialogflow.v2.Participant.RoleB�A&
sip_recording_media_label (	B�An
documents_metadata_filters (2E.google.cloud.dialogflow.v2.Participant.DocumentsMetadataFiltersEntryB�A?
DocumentsMetadataFiltersEntry
key (	
value (	:8"P
Role
ROLE_UNSPECIFIED 
HUMAN_AGENT
AUTOMATED_AGENT
END_USER:��A�
%dialogflow.googleapis.com/ParticipantJprojects/{project}/conversations/{conversation}/participants/{participant}_projects/{project}/locations/{location}/conversations/{conversation}/participants/{participant}"�
Message
name (	B�A
content (	B�A
language_code (	B�A
participant (	B�AK
participant_role (2,.google.cloud.dialogflow.v2.Participant.RoleB�A4
create_time (2.google.protobuf.TimestampB�A2
	send_time	 (2.google.protobuf.TimestampB�AN
message_annotation (2-.google.cloud.dialogflow.v2.MessageAnnotationB�AT
sentiment_analysis (23.google.cloud.dialogflow.v2.SentimentAnalysisResultB�A:��A�
!dialogflow.googleapis.com/MessageBprojects/{project}/conversations/{conversation}/messages/{message}Wprojects/{project}/locations/{location}/conversations/{conversation}/messages/{message}"�
CreateParticipantRequest=
parent (	B-�A�A\'%dialogflow.googleapis.com/ParticipantA
participant (2\'.google.cloud.dialogflow.v2.ParticipantB�A"T
GetParticipantRequest;
name (	B-�A�A\'
%dialogflow.googleapis.com/Participant"�
ListParticipantsRequest=
parent (	B-�A�A\'%dialogflow.googleapis.com/Participant
	page_size (B�A

page_token (	B�A"r
ListParticipantsResponse=
participants (2\'.google.cloud.dialogflow.v2.Participant
next_page_token (	"�
UpdateParticipantRequestA
participant (2\'.google.cloud.dialogflow.v2.ParticipantB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
AnalyzeContentRequestB
participant (	B-�A�A\'
%dialogflow.googleapis.com/Participant;

text_input (2%.google.cloud.dialogflow.v2.TextInputH =
event_input (2&.google.cloud.dialogflow.v2.EventInputH I
reply_audio_config (2-.google.cloud.dialogflow.v2.OutputAudioConfigA
query_params	 (2+.google.cloud.dialogflow.v2.QueryParametersN
assist_query_params (21.google.cloud.dialogflow.v2.AssistQueryParameters

request_id (	B
input",
DtmfParameters
accepts_dtmf_input ("�
AnalyzeContentResponse

reply_text (	<
reply_audio (2\'.google.cloud.dialogflow.v2.OutputAudioN
automated_agent_reply (2/.google.cloud.dialogflow.v2.AutomatedAgentReply4
message (2#.google.cloud.dialogflow.v2.MessageT
human_agent_suggestion_results (2,.google.cloud.dialogflow.v2.SuggestionResultQ
end_user_suggestion_results (2,.google.cloud.dialogflow.v2.SuggestionResultC
dtmf_parameters	 (2*.google.cloud.dialogflow.v2.DtmfParameters"�
SuggestArticlesRequest=
parent (	B-�A�A\'
%dialogflow.googleapis.com/ParticipantA
latest_message (	B)�A�A#
!dialogflow.googleapis.com/Message
context_size (B�AN
assist_query_params (21.google.cloud.dialogflow.v2.AssistQueryParameters"�
SuggestArticlesResponseB
article_answers (2).google.cloud.dialogflow.v2.ArticleAnswer
latest_message (	
context_size ("�
SuggestFaqAnswersRequest=
parent (	B-�A�A\'
%dialogflow.googleapis.com/ParticipantA
latest_message (	B)�A�A#
!dialogflow.googleapis.com/Message
context_size (B�AN
assist_query_params (21.google.cloud.dialogflow.v2.AssistQueryParameters"�
SuggestFaqAnswersResponse:
faq_answers (2%.google.cloud.dialogflow.v2.FaqAnswer
latest_message (	
context_size ("�
SuggestSmartRepliesRequest=
parent (	B-�A�A\'
%dialogflow.googleapis.com/ParticipantA
current_text_input (2%.google.cloud.dialogflow.v2.TextInput>
latest_message (	B&�A#
!dialogflow.googleapis.com/Message
context_size ("�
SuggestSmartRepliesResponseN
smart_reply_answers (2,.google.cloud.dialogflow.v2.SmartReplyAnswerB�A>
latest_message (	B&�A#
!dialogflow.googleapis.com/Message
context_size ("[
OutputAudio=
config (2-.google.cloud.dialogflow.v2.OutputAudioConfig
audio ("�
AutomatedAgentReplyP
detect_intent_response (20.google.cloud.dialogflow.v2.DetectIntentResponsek
automated_agent_reply_type (2G.google.cloud.dialogflow.v2.AutomatedAgentReply.AutomatedAgentReplyType
allow_cancellation ("]
AutomatedAgentReplyType*
&AUTOMATED_AGENT_REPLY_TYPE_UNSPECIFIED 
PARTIAL	
FINAL"�
ArticleAnswer
title (	
uri (	
snippets (	

confidence (I
metadata (27.google.cloud.dialogflow.v2.ArticleAnswer.MetadataEntry
answer_record (	/
MetadataEntry
key (	
value (	:8"�
	FaqAnswer
answer (	

confidence (
question (	
source (	E
metadata (23.google.cloud.dialogflow.v2.FaqAnswer.MetadataEntry
answer_record (	/
MetadataEntry
key (	
value (	:8"y
SmartReplyAnswer
reply (	

confidence (B
answer_record (	B+�A(
&dialogflow.googleapis.com/AnswerRecord"�
SuggestionResult#
error (2.google.rpc.StatusH X
suggest_articles_response (23.google.cloud.dialogflow.v2.SuggestArticlesResponseH ]
suggest_faq_answers_response (25.google.cloud.dialogflow.v2.SuggestFaqAnswersResponseH a
suggest_smart_replies_response (27.google.cloud.dialogflow.v2.SuggestSmartRepliesResponseH B
suggestion_response"j
AnnotatedMessagePart
text (	
entity_type (	/
formatted_value (2.google.protobuf.Value"n
MessageAnnotation?
parts (20.google.cloud.dialogflow.v2.AnnotatedMessagePart
contain_entities ("�
AssistQueryParameterss
documents_metadata_filters (2O.google.cloud.dialogflow.v2.AssistQueryParameters.DocumentsMetadataFiltersEntry?
DocumentsMetadataFiltersEntry
key (	
value (	:82�
Participants�
CreateParticipant4.google.cloud.dialogflow.v2.CreateParticipantRequest\'.google.cloud.dialogflow.v2.Participant"�����"4/v2/{parent=projects/*/conversations/*}/participants:participantZO"@/v2/{parent=projects/*/locations/*/conversations/*}/participants:participant�Aparent,participant�
GetParticipant1.google.cloud.dialogflow.v2.GetParticipantRequest\'.google.cloud.dialogflow.v2.Participant"����z4/v2/{name=projects/*/conversations/*/participants/*}ZB@/v2/{name=projects/*/locations/*/conversations/*/participants/*}�Aname�
ListParticipants3.google.cloud.dialogflow.v2.ListParticipantsRequest4.google.cloud.dialogflow.v2.ListParticipantsResponse"����z4/v2/{parent=projects/*/conversations/*}/participantsZB@/v2/{parent=projects/*/locations/*/conversations/*}/participants�Aparent�
UpdateParticipant4.google.cloud.dialogflow.v2.UpdateParticipantRequest\'.google.cloud.dialogflow.v2.Participant"�����2@/v2/{participant.name=projects/*/conversations/*/participants/*}:participantZ[2L/v2/{participant.name=projects/*/locations/*/conversations/*/participants/*}:participant�Aparticipant,update_mask�
AnalyzeContent1.google.cloud.dialogflow.v2.AnalyzeContentRequest2.google.cloud.dialogflow.v2.AnalyzeContentResponse"�����"J/v2/{participant=projects/*/conversations/*/participants/*}:analyzeContent:*Z["V/v2/{participant=projects/*/locations/*/conversations/*/participants/*}:analyzeContent:*�Aparticipant,text_input�Aparticipant,event_input�
SuggestArticles2.google.cloud.dialogflow.v2.SuggestArticlesRequest3.google.cloud.dialogflow.v2.SuggestArticlesResponse"�����"R/v2/{parent=projects/*/conversations/*/participants/*}/suggestions:suggestArticles:*Zc"^/v2/{parent=projects/*/locations/*/conversations/*/participants/*}/suggestions:suggestArticles:*�Aparent�
SuggestFaqAnswers4.google.cloud.dialogflow.v2.SuggestFaqAnswersRequest5.google.cloud.dialogflow.v2.SuggestFaqAnswersResponse"�����"T/v2/{parent=projects/*/conversations/*/participants/*}/suggestions:suggestFaqAnswers:*Ze"`/v2/{parent=projects/*/locations/*/conversations/*/participants/*}/suggestions:suggestFaqAnswers:*�Aparent�
SuggestSmartReplies6.google.cloud.dialogflow.v2.SuggestSmartRepliesRequest7.google.cloud.dialogflow.v2.SuggestSmartRepliesResponse"�����"V/v2/{parent=projects/*/conversations/*/participants/*}/suggestions:suggestSmartReplies:*Zg"b/v2/{parent=projects/*/locations/*/conversations/*/participants/*}/suggestions:suggestSmartReplies:*�Aparentx�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
com.google.cloud.dialogflow.v2BParticipantProtoPZDgoogle.golang.org/genproto/googleapis/cloud/dialogflow/v2;dialogflow��DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}


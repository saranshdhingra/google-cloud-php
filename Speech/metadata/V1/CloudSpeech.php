<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace GPBMetadata\Google\Cloud\Speech\V1;

class CloudSpeech
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
        \GPBMetadata\Google\Cloud\Speech\V1\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�-
)google/cloud/speech/v1/cloud_speech.protogoogle.cloud.speech.v1google/api/client.protogoogle/api/field_behavior.proto%google/cloud/speech/v1/resource.proto#google/longrunning/operations.protogoogle/protobuf/any.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/rpc/status.proto"�
RecognizeRequest>
config (2).google.cloud.speech.v1.RecognitionConfigB�A<
audio (2(.google.cloud.speech.v1.RecognitionAudioB�A"�
LongRunningRecognizeRequest>
config (2).google.cloud.speech.v1.RecognitionConfigB�A<
audio (2(.google.cloud.speech.v1.RecognitionAudioB�AJ
output_config (2..google.cloud.speech.v1.TranscriptOutputConfigB�A":
TranscriptOutputConfig
gcs_uri (	H B
output_type"�
StreamingRecognizeRequestN
streaming_config (22.google.cloud.speech.v1.StreamingRecognitionConfigH 
audio_content (H B
streaming_request"�
StreamingRecognitionConfig>
config (2).google.cloud.speech.v1.RecognitionConfigB�A
single_utterance (
interim_results ("�
RecognitionConfigI
encoding (27.google.cloud.speech.v1.RecognitionConfig.AudioEncoding
sample_rate_hertz (
audio_channel_count (/
\'enable_separate_recognition_per_channel (
language_code (	B�A"
alternative_language_codes (	
max_alternatives (
profanity_filter (<

adaptation (2(.google.cloud.speech.v1.SpeechAdaptation>
speech_contexts (2%.google.cloud.speech.v1.SpeechContext 
enable_word_time_offsets (
enable_word_confidence ($
enable_automatic_punctuation (=
enable_spoken_punctuation (2.google.protobuf.BoolValue8
enable_spoken_emojis (2.google.protobuf.BoolValueL
diarization_config (20.google.cloud.speech.v1.SpeakerDiarizationConfig=
metadata	 (2+.google.cloud.speech.v1.RecognitionMetadata
model (	
use_enhanced ("�
AudioEncoding
ENCODING_UNSPECIFIED 
LINEAR16
FLAC	
MULAW
AMR

AMR_WB
OGG_OPUS
SPEEX_WITH_HEADER_BYTE
	WEBM_OPUS	"�
SpeakerDiarizationConfig"
enable_speaker_diarization (
min_speaker_count (
max_speaker_count (
speaker_tag (B�A"�
RecognitionMetadataU
interaction_type (2;.google.cloud.speech.v1.RecognitionMetadata.InteractionType$
industry_naics_code_of_audio ([
microphone_distance (2>.google.cloud.speech.v1.RecognitionMetadata.MicrophoneDistanceZ
original_media_type (2=.google.cloud.speech.v1.RecognitionMetadata.OriginalMediaType^
recording_device_type (2?.google.cloud.speech.v1.RecognitionMetadata.RecordingDeviceType
recording_device_name (	
original_mime_type (	
audio_topic
 (	"�
InteractionType 
INTERACTION_TYPE_UNSPECIFIED 

DISCUSSION
PRESENTATION

PHONE_CALL
	VOICEMAIL
PROFESSIONALLY_PRODUCED
VOICE_SEARCH
VOICE_COMMAND
	DICTATION"d
MicrophoneDistance#
MICROPHONE_DISTANCE_UNSPECIFIED 
	NEARFIELD
MIDFIELD
FARFIELD"N
OriginalMediaType#
ORIGINAL_MEDIA_TYPE_UNSPECIFIED 	
AUDIO	
VIDEO"�
RecordingDeviceType%
!RECORDING_DEVICE_TYPE_UNSPECIFIED 

SMARTPHONE
PC

PHONE_LINE
VEHICLE
OTHER_OUTDOOR_DEVICE
OTHER_INDOOR_DEVICE"/
SpeechContext
phrases (	
boost ("D
RecognitionAudio
content (H 
uri (	H B
audio_source"�
RecognizeResponse@
results (2/.google.cloud.speech.v1.SpeechRecognitionResult4
total_billed_time (2.google.protobuf.Duration"�
LongRunningRecognizeResponse@
results (2/.google.cloud.speech.v1.SpeechRecognitionResult4
total_billed_time (2.google.protobuf.DurationE
output_config (2..google.cloud.speech.v1.TranscriptOutputConfig(
output_error (2.google.rpc.Status"�
LongRunningRecognizeMetadata
progress_percent (.

start_time (2.google.protobuf.Timestamp4
last_update_time (2.google.protobuf.Timestamp
uri (	B�A"�
StreamingRecognizeResponse!
error (2.google.rpc.StatusC
results (22.google.cloud.speech.v1.StreamingRecognitionResult]
speech_event_type (2B.google.cloud.speech.v1.StreamingRecognizeResponse.SpeechEventType4
total_billed_time (2.google.protobuf.Duration"L
SpeechEventType
SPEECH_EVENT_UNSPECIFIED 
END_OF_SINGLE_UTTERANCE"�
StreamingRecognitionResultJ
alternatives (24.google.cloud.speech.v1.SpeechRecognitionAlternative
is_final (
	stability (2
result_end_time (2.google.protobuf.Duration
channel_tag (
language_code (	B�A"�
SpeechRecognitionResultJ
alternatives (24.google.cloud.speech.v1.SpeechRecognitionAlternative
channel_tag (2
result_end_time (2.google.protobuf.Duration
language_code (	B�A"w
SpeechRecognitionAlternative

transcript (	

confidence (/
words (2 .google.cloud.speech.v1.WordInfo"�
WordInfo-

start_time (2.google.protobuf.Duration+
end_time (2.google.protobuf.Duration
word (	

confidence (
speaker_tag (B�A2�
Speech�
	Recognize(.google.cloud.speech.v1.RecognizeRequest).google.cloud.speech.v1.RecognizeResponse".���"/v1/speech:recognize:*�Aconfig,audio�
LongRunningRecognize3.google.cloud.speech.v1.LongRunningRecognizeRequest.google.longrunning.Operation"x���$"/v1/speech:longrunningrecognize:*�Aconfig,audio�A<
LongRunningRecognizeResponseLongRunningRecognizeMetadata�
StreamingRecognize1.google.cloud.speech.v1.StreamingRecognizeRequest2.google.cloud.speech.v1.StreamingRecognizeResponse" (0I�Aspeech.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBr
com.google.cloud.speech.v1BSpeechProtoPZ<google.golang.org/genproto/googleapis/cloud/speech/v1;speech��GCSbproto3'
        , true);

        static::$is_initialized = true;
    }
}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace GPBMetadata\Google\Cloud\Deploy\V1;

class CloudDeploy
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
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
)google/cloud/deploy/v1/cloud_deploy.protogoogle.cloud.deploy.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.protogoogle/protobuf/duration.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/type/date.proto"�
DeliveryPipeline
name (	B�A
uid (	B�A
description (	N
annotations (29.google.cloud.deploy.v1.DeliveryPipeline.AnnotationsEntryD
labels (24.google.cloud.deploy.v1.DeliveryPipeline.LabelsEntry4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AA
serial_pipeline (2&.google.cloud.deploy.v1.SerialPipelineH A
	condition (2).google.cloud.deploy.v1.PipelineConditionB�A
etag
 (	
	suspended (2
AnnotationsEntry
key (	
value (	:8-
LabelsEntry
key (	
value (	:8:�A|
+clouddeploy.googleapis.com/DeliveryPipelineMprojects/{project}/locations/{location}/deliveryPipelines/{delivery_pipeline}B

pipeline"?
SerialPipeline-
stages (2.google.cloud.deploy.v1.Stage"e
Stage
	target_id (	
profiles (	7
strategy (2 .google.cloud.deploy.v1.StrategyB�A"�
Strategy4
standard (2 .google.cloud.deploy.v1.StandardH 0
canary (2.google.cloud.deploy.v1.CanaryH B
deployment_strategy"
Standard
verify ("�
CanaryB
runtime_config (2%.google.cloud.deploy.v1.RuntimeConfigB�AE
canary_deployment (2(.google.cloud.deploy.v1.CanaryDeploymentH R
custom_canary_deployment (2..google.cloud.deploy.v1.CustomCanaryDeploymentH B
mode"<
CanaryDeployment
percentages (B�A
verify ("�
CustomCanaryDeploymentV
phase_configs (2:.google.cloud.deploy.v1.CustomCanaryDeployment.PhaseConfigB�A_
PhaseConfig
phase_id (	B�A

percentage (B�A
profiles (	
verify ("�
KubernetesConfig[
gateway_service_mesh (2;.google.cloud.deploy.v1.KubernetesConfig.GatewayServiceMeshH X
service_networking (2:.google.cloud.deploy.v1.KubernetesConfig.ServiceNetworkingH \\
GatewayServiceMesh

http_route (	B�A
service (	B�A

deployment (	B�AB
ServiceNetworking
service (	B�A

deployment (	B�AB
service_definition"3
CloudRunConfig!
automatic_traffic_control ("�
RuntimeConfig>

kubernetes (2(.google.cloud.deploy.v1.KubernetesConfigH ;
	cloud_run (2&.google.cloud.deploy.v1.CloudRunConfigH B
runtime_config"Y
PipelineReadyCondition
status (/
update_time (2.google.protobuf.Timestamp"�
TargetsPresentCondition
status (?
missing_targets (	B&�A#
!clouddeploy.googleapis.com/Target/
update_time (2.google.protobuf.Timestamp"=
TargetsTypeCondition
status (
error_details (	"�
PipelineConditionP
pipeline_ready_condition (2..google.cloud.deploy.v1.PipelineReadyConditionR
targets_present_condition (2/.google.cloud.deploy.v1.TargetsPresentConditionL
targets_type_condition (2,.google.cloud.deploy.v1.TargetsTypeCondition"�
ListDeliveryPipelinesRequestC
parent (	B3�A�A-+clouddeploy.googleapis.com/DeliveryPipeline
	page_size (

page_token (	
filter (	
order_by (	"�
ListDeliveryPipelinesResponseD
delivery_pipelines (2(.google.cloud.deploy.v1.DeliveryPipeline
next_page_token (	
unreachable (	"_
GetDeliveryPipelineRequestA
name (	B3�A�A-
+clouddeploy.googleapis.com/DeliveryPipeline"�
CreateDeliveryPipelineRequestC
parent (	B3�A�A-+clouddeploy.googleapis.com/DeliveryPipeline!
delivery_pipeline_id (	B�AH
delivery_pipeline (2(.google.cloud.deploy.v1.DeliveryPipelineB�A

request_id (	B�A
validate_only (B�A"�
UpdateDeliveryPipelineRequest4
update_mask (2.google.protobuf.FieldMaskB�AH
delivery_pipeline (2(.google.cloud.deploy.v1.DeliveryPipelineB�A

request_id (	B�A
allow_missing (B�A
validate_only (B�A"�
DeleteDeliveryPipelineRequestA
name (	B3�A�A-
+clouddeploy.googleapis.com/DeliveryPipeline

request_id (	B�A
allow_missing (B�A
validate_only (B�A
force (B�A
etag (	B�A"�
Target
name (	B�A
	target_id (	B�A
uid (	B�A
description (	B�AI
annotations (2/.google.cloud.deploy.v1.Target.AnnotationsEntryB�A?
labels (2*.google.cloud.deploy.v1.Target.LabelsEntryB�A
require_approval (B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time	 (2.google.protobuf.TimestampB�A1
gke (2".google.cloud.deploy.v1.GkeClusterH ?
anthos_cluster (2%.google.cloud.deploy.v1.AnthosClusterH 7
run (2(.google.cloud.deploy.v1.CloudRunLocationH ;
multi_target (2#.google.cloud.deploy.v1.MultiTargetH 
etag (	B�AB
execution_configs (2\'.google.cloud.deploy.v1.ExecutionConfig2
AnnotationsEntry
key (	
value (	:8-
LabelsEntry
key (	
value (	:8:`�A]
!clouddeploy.googleapis.com/Target8projects/{project}/locations/{location}/targets/{target}B
deployment_target"�
ExecutionConfigV
usages (2A.google.cloud.deploy.v1.ExecutionConfig.ExecutionEnvironmentUsageB�A@
default_pool (2#.google.cloud.deploy.v1.DefaultPoolB�AH @
private_pool (2#.google.cloud.deploy.v1.PrivatePoolB�AH A
worker_pool (	B,�A�A&
$cloudbuild.googleapis.com/WorkerPool
service_account (	B�A
artifact_storage (	B�A9
execution_timeout (2.google.protobuf.DurationB�A"l
ExecutionEnvironmentUsage+
\'EXECUTION_ENVIRONMENT_USAGE_UNSPECIFIED 

RENDER

DEPLOY

VERIFYB
execution_environment"J
DefaultPool
service_account (	B�A
artifact_storage (	B�A"�
PrivatePoolA
worker_pool (	B,�A�A&
$cloudbuild.googleapis.com/WorkerPool
service_account (	B�A
artifact_storage (	B�A"^

GkeCluster6
cluster (	B%�A"
 container.googleapis.com/Cluster
internal_ip (B�A"J
AnthosCluster9

membership (	B%�A"
 gkehub.googleapis.com/Membership"O
CloudRunLocation;
location (	B)�A�A#
!locations.googleapis.com/Location"&
MultiTarget

target_ids (	B�A"�
ListTargetsRequest9
parent (	B)�A�A#!clouddeploy.googleapis.com/Target
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"t
ListTargetsResponse/
targets (2.google.cloud.deploy.v1.Target
next_page_token (	
unreachable (	"K
GetTargetRequest7
name (	B)�A�A#
!clouddeploy.googleapis.com/Target"�
CreateTargetRequest9
parent (	B)�A�A#!clouddeploy.googleapis.com/Target
	target_id (	B�A3
target (2.google.cloud.deploy.v1.TargetB�A

request_id (	B�A
validate_only (B�A"�
UpdateTargetRequest4
update_mask (2.google.protobuf.FieldMaskB�A3
target (2.google.cloud.deploy.v1.TargetB�A

request_id (	B�A
allow_missing (B�A
validate_only (B�A"�
DeleteTargetRequest7
name (	B)�A�A#
!clouddeploy.googleapis.com/Target

request_id (	B�A
allow_missing (B�A
validate_only (B�A
etag (	B�A"�
Release
name (	B�A
uid (	B�A
description (	E
annotations (20.google.cloud.deploy.v1.Release.AnnotationsEntry;
labels (2+.google.cloud.deploy.v1.Release.LabelsEntry
	abandoned (B�A4
create_time (2.google.protobuf.TimestampB�A:
render_start_time (2.google.protobuf.TimestampB�A8
render_end_time (2.google.protobuf.TimestampB�A
skaffold_config_uri (	
skaffold_config_path	 (	>
build_artifacts
 (2%.google.cloud.deploy.v1.BuildArtifactQ
delivery_pipeline_snapshot (2(.google.cloud.deploy.v1.DeliveryPipelineB�A=
target_snapshots (2.google.cloud.deploy.v1.TargetB�AF
render_state (2+.google.cloud.deploy.v1.Release.RenderStateB�A
etag (	
skaffold_version (	S
target_artifacts (24.google.cloud.deploy.v1.Release.TargetArtifactsEntryB�AO
target_renders (22.google.cloud.deploy.v1.Release.TargetRendersEntryB�AH
	condition (20.google.cloud.deploy.v1.Release.ReleaseConditionB�A�
TargetRender@
rendering_build (	B\'�A�A!
cloudbuild.googleapis.com/Build\\
rendering_state (2>.google.cloud.deploy.v1.Release.TargetRender.TargetRenderStateB�A=
metadata (2&.google.cloud.deploy.v1.RenderMetadataB�AU
failure_cause (29.google.cloud.deploy.v1.Release.TargetRender.FailureCauseB�A
failure_message (	B�A"d
TargetRenderState#
TARGET_RENDER_STATE_UNSPECIFIED 
	SUCCEEDED

FAILED
IN_PROGRESS"�
FailureCause
FAILURE_CAUSE_UNSPECIFIED 
CLOUD_BUILD_UNAVAILABLE
EXECUTION_FAILED
CLOUD_BUILD_REQUEST_FAILED\'
ReleaseReadyCondition
status (�
SkaffoldSupportedCondition
status (L
skaffold_support_state (2,.google.cloud.deploy.v1.SkaffoldSupportState9
maintenance_mode_time (2.google.protobuf.Timestamp;
support_expiration_time (2.google.protobuf.Timestamp�
ReleaseConditionV
release_ready_condition (25.google.cloud.deploy.v1.Release.ReleaseReadyCondition`
skaffold_supported_condition (2:.google.cloud.deploy.v1.Release.SkaffoldSupportedCondition2
AnnotationsEntry
key (	
value (	:8-
LabelsEntry
key (	
value (	:8^
TargetArtifactsEntry
key (	5
value (2&.google.cloud.deploy.v1.TargetArtifact:8b
TargetRendersEntry
key (	;
value (2,.google.cloud.deploy.v1.Release.TargetRender:8"W
RenderState
RENDER_STATE_UNSPECIFIED 
	SUCCEEDED

FAILED
IN_PROGRESS:��A�
"clouddeploy.googleapis.com/Release`projects/{project}/locations/{location}/deliveryPipelines/{delivery_pipeline}/releases/{release}"+
BuildArtifact
image (	
tag (	"�
TargetArtifact
artifact_uri (	B�AH !
skaffold_config_path (	B�A
manifest_path (	B�AX
phase_artifacts (2:.google.cloud.deploy.v1.TargetArtifact.PhaseArtifactsEntryB�Ao
PhaseArtifact!
skaffold_config_path (	B�A
manifest_path (	B�A
job_manifests_path (	B�Ak
PhaseArtifactsEntry
key (	C
value (24.google.cloud.deploy.v1.TargetArtifact.PhaseArtifact:8B
uri"H
DeployArtifact
artifact_uri (	B�A
manifest_paths (	B�A"M
CloudRunRenderMetadata3
service (	B"�A�A
run.googleapis.com/Service"X
RenderMetadataF
	cloud_run (2..google.cloud.deploy.v1.CloudRunRenderMetadataB�A"�
ListReleasesRequestC
parent (	B3�A�A-
+clouddeploy.googleapis.com/DeliveryPipeline
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"w
ListReleasesResponse1
releases (2.google.cloud.deploy.v1.Release
next_page_token (	
unreachable (	"M
GetReleaseRequest8
name (	B*�A�A$
"clouddeploy.googleapis.com/Release"�
CreateReleaseRequestC
parent (	B3�A�A-
+clouddeploy.googleapis.com/DeliveryPipeline

release_id (	B�A5
release (2.google.cloud.deploy.v1.ReleaseB�A

request_id (	B�A
validate_only (B�A"�
Rollout
name (	B�A
uid (	B�A
description (	E
annotations (20.google.cloud.deploy.v1.Rollout.AnnotationsEntry;
labels (2+.google.cloud.deploy.v1.Rollout.LabelsEntry4
create_time (2.google.protobuf.TimestampB�A5
approve_time (2.google.protobuf.TimestampB�A5
enqueue_time (2.google.protobuf.TimestampB�A:
deploy_start_time	 (2.google.protobuf.TimestampB�A8
deploy_end_time
 (2.google.protobuf.TimestampB�A
	target_id (	B�AJ
approval_state (2-.google.cloud.deploy.v1.Rollout.ApprovalStateB�A9
state (2%.google.cloud.deploy.v1.Rollout.StateB�A
failure_reason (	B�A@
deploying_build (	B\'�A�A!
cloudbuild.googleapis.com/Build
etag (	O
deploy_failure_cause (2,.google.cloud.deploy.v1.Rollout.FailureCauseB�A2
phases (2.google.cloud.deploy.v1.PhaseB�A7
metadata (2 .google.cloud.deploy.v1.MetadataB�A
controller_rollout (	B�A2
AnnotationsEntry
key (	
value (	:8-
LabelsEntry
key (	
value (	:8"{
ApprovalState
APPROVAL_STATE_UNSPECIFIED 
NEEDS_APPROVAL
DOES_NOT_NEED_APPROVAL
APPROVED
REJECTED"�
State
STATE_UNSPECIFIED 
	SUCCEEDED

FAILED
IN_PROGRESS
PENDING_APPROVAL
APPROVAL_REJECTED
PENDING
PENDING_RELEASE

CANCELLING
	CANCELLED	

HALTED
"�
FailureCause
FAILURE_CAUSE_UNSPECIFIED 
CLOUD_BUILD_UNAVAILABLE
EXECUTION_FAILED
DEADLINE_EXCEEDED
RELEASE_FAILED
RELEASE_ABANDONED!
VERIFICATION_CONFIG_NOT_FOUND
CLOUD_BUILD_REQUEST_FAILED:��A�
"clouddeploy.googleapis.com/Rolloutsprojects/{project}/locations/{location}/deliveryPipelines/{delivery_pipeline}/releases/{release}/rollouts/{rollout}"L
Metadata@
	cloud_run (2(.google.cloud.deploy.v1.CloudRunMetadataB�A"X
DeployJobRunMetadata@
	cloud_run (2(.google.cloud.deploy.v1.CloudRunMetadataB�A"y
CloudRunMetadata3
service (	B"�A�A
run.googleapis.com/Service
service_urls (	B�A
revision (	B�A"�
Phase
id (	B�A7
state (2#.google.cloud.deploy.v1.Phase.StateB�A
skip_message (	B�AF
deployment_jobs (2&.google.cloud.deploy.v1.DeploymentJobsB�AH K
child_rollout_jobs (2(.google.cloud.deploy.v1.ChildRolloutJobsB�AH "q
State
STATE_UNSPECIFIED 
PENDING
IN_PROGRESS
	SUCCEEDED

FAILED
ABORTED
SKIPPEDB
jobs"|
DeploymentJobs4

deploy_job (2.google.cloud.deploy.v1.JobB�A4

verify_job (2.google.cloud.deploy.v1.JobB�A"�
ChildRolloutJobs=
create_rollout_jobs (2.google.cloud.deploy.v1.JobB�A>
advance_rollout_jobs (2.google.cloud.deploy.v1.JobB�A"�
Job
id (	B�A5
state (2!.google.cloud.deploy.v1.Job.StateB�A
skip_message (	B�A:
job_run (	B)�A�A#
!clouddeploy.googleapis.com/JobRun<

deploy_job (2!.google.cloud.deploy.v1.DeployJobB�AH <

verify_job (2!.google.cloud.deploy.v1.VerifyJobB�AH V
create_child_rollout_job (2-.google.cloud.deploy.v1.CreateChildRolloutJobB�AH X
advance_child_rollout_job (2..google.cloud.deploy.v1.AdvanceChildRolloutJobB�AH "�
State
STATE_UNSPECIFIED 
PENDING
DISABLED
IN_PROGRESS
	SUCCEEDED

FAILED
ABORTED
SKIPPED
IGNOREDB

job_type"
	DeployJob"
	VerifyJob"
CreateChildRolloutJob"
AdvanceChildRolloutJob"�
ListRolloutsRequest:
parent (	B*�A�A$
"clouddeploy.googleapis.com/Release
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"w
ListRolloutsResponse1
rollouts (2.google.cloud.deploy.v1.Rollout
next_page_token (	
unreachable (	"M
GetRolloutRequest8
name (	B*�A�A$
"clouddeploy.googleapis.com/Rollout"�
CreateRolloutRequest:
parent (	B*�A�A$
"clouddeploy.googleapis.com/Release

rollout_id (	B�A5
rollout (2.google.cloud.deploy.v1.RolloutB�A

request_id (	B�A
validate_only (B�A
starting_phase_id (	B�A"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A"h
ApproveRolloutRequest8
name (	B*�A�A$
"clouddeploy.googleapis.com/Rollout
approved (B�A"
ApproveRolloutResponse"h
AdvanceRolloutRequest8
name (	B*�A�A$
"clouddeploy.googleapis.com/Rollout
phase_id (	B�A"
AdvanceRolloutResponse"P
CancelRolloutRequest8
name (	B*�A�A$
"clouddeploy.googleapis.com/Rollout"
CancelRolloutResponse"{
IgnoreJobRequest;
rollout (	B*�A�A$
"clouddeploy.googleapis.com/Rollout
phase_id (	B�A
job_id (	B�A"
IgnoreJobResponse"z
RetryJobRequest;
rollout (	B*�A�A$
"clouddeploy.googleapis.com/Rollout
phase_id (	B�A
job_id (	B�A"
RetryJobResponse"Q
AbandonReleaseRequest8
name (	B*�A�A$
"clouddeploy.googleapis.com/Release"
AbandonReleaseResponse"�
JobRun
name (	B�A
uid (	B�A
phase_id (	B�A
job_id (	B�A4
create_time (2.google.protobuf.TimestampB�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A8
state (2$.google.cloud.deploy.v1.JobRun.StateB�AC
deploy_job_run	 (2$.google.cloud.deploy.v1.DeployJobRunB�AH C
verify_job_run
 (2$.google.cloud.deploy.v1.VerifyJobRunB�AH ]
create_child_rollout_job_run (20.google.cloud.deploy.v1.CreateChildRolloutJobRunB�AH _
advance_child_rollout_job_run (21.google.cloud.deploy.v1.AdvanceChildRolloutJobRunB�AH 
etag (	B�A"k
State
STATE_UNSPECIFIED 
IN_PROGRESS
	SUCCEEDED

FAILED
TERMINATING

TERMINATED:��A�
!clouddeploy.googleapis.com/JobRun�projects/{project}/locations/{location}/deliveryPipelines/{delivery_pipeline}/releases/{release}/rollouts/{rollout}/jobRuns/{job_run}B	
job_run"�
DeployJobRun6
build (	B\'�A�A!
cloudbuild.googleapis.com/BuildM
failure_cause (21.google.cloud.deploy.v1.DeployJobRun.FailureCauseB�A
failure_message (	B�AC
metadata (2,.google.cloud.deploy.v1.DeployJobRunMetadataB�A=
artifact (2&.google.cloud.deploy.v1.DeployArtifactB�A"�
FailureCause
FAILURE_CAUSE_UNSPECIFIED 
CLOUD_BUILD_UNAVAILABLE
EXECUTION_FAILED
DEADLINE_EXCEEDED 
MISSING_RESOURCES_FOR_CANARY
CLOUD_BUILD_REQUEST_FAILED"�
VerifyJobRun6
build (	B\'�A�A!
cloudbuild.googleapis.com/Build
artifact_uri (	B�A
event_log_path (	B�AM
failure_cause (21.google.cloud.deploy.v1.VerifyJobRun.FailureCauseB�A
failure_message (	B�A"�
FailureCause
FAILURE_CAUSE_UNSPECIFIED 
CLOUD_BUILD_UNAVAILABLE
EXECUTION_FAILED
DEADLINE_EXCEEDED!
VERIFICATION_CONFIG_NOT_FOUND
CLOUD_BUILD_REQUEST_FAILED"O
CreateChildRolloutJobRun
rollout (	B�A
rollout_phase_id (	B�A"P
AdvanceChildRolloutJobRun
rollout (	B�A
rollout_phase_id (	B�A"�
ListJobRunsRequest:
parent (	B*�A�A$
"clouddeploy.googleapis.com/Rollout
	page_size (B�A

page_token (	B�A
filter (	B�A
order_by (	B�A"u
ListJobRunsResponse0
job_runs (2.google.cloud.deploy.v1.JobRun
next_page_token (	
unreachable (	"K
GetJobRunRequest7
name (	B)�A�A#
!clouddeploy.googleapis.com/JobRun"Q
TerminateJobRunRequest7
name (	B)�A�A#
!clouddeploy.googleapis.com/JobRun"
TerminateJobRunResponse"�
Config
name (	C
supported_versions (2\'.google.cloud.deploy.v1.SkaffoldVersion 
default_skaffold_version (	:V�AS
!clouddeploy.googleapis.com/Config.projects/{project}/locations/{location}/config"�
SkaffoldVersion
version (	9
maintenance_mode_time (2.google.protobuf.Timestamp;
support_expiration_time (2.google.protobuf.Timestamp+
support_end_date (2.google.type.Date"K
GetConfigRequest7
name (	B)�A�A#
!clouddeploy.googleapis.com/Config*�
SkaffoldSupportState&
"SKAFFOLD_SUPPORT_STATE_UNSPECIFIED $
 SKAFFOLD_SUPPORT_STATE_SUPPORTED+
\'SKAFFOLD_SUPPORT_STATE_MAINTENANCE_MODE&
"SKAFFOLD_SUPPORT_STATE_UNSUPPORTED2�+
CloudDeploy�
ListDeliveryPipelines4.google.cloud.deploy.v1.ListDeliveryPipelinesRequest5.google.cloud.deploy.v1.ListDeliveryPipelinesResponse"F���75/v1/{parent=projects/*/locations/*}/deliveryPipelines�Aparent�
GetDeliveryPipeline2.google.cloud.deploy.v1.GetDeliveryPipelineRequest(.google.cloud.deploy.v1.DeliveryPipeline"D���75/v1/{name=projects/*/locations/*/deliveryPipelines/*}�Aname�
CreateDeliveryPipeline5.google.cloud.deploy.v1.CreateDeliveryPipelineRequest.google.longrunning.Operation"����J"5/v1/{parent=projects/*/locations/*}/deliveryPipelines:delivery_pipeline�A-parent,delivery_pipeline,delivery_pipeline_id�A%
DeliveryPipelineOperationMetadata�
UpdateDeliveryPipeline5.google.cloud.deploy.v1.UpdateDeliveryPipelineRequest.google.longrunning.Operation"����\\2G/v1/{delivery_pipeline.name=projects/*/locations/*/deliveryPipelines/*}:delivery_pipeline�Adelivery_pipeline,update_mask�A%
DeliveryPipelineOperationMetadata�
DeleteDeliveryPipeline5.google.cloud.deploy.v1.DeleteDeliveryPipelineRequest.google.longrunning.Operation"q���7*5/v1/{name=projects/*/locations/*/deliveryPipelines/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListTargets*.google.cloud.deploy.v1.ListTargetsRequest+.google.cloud.deploy.v1.ListTargetsResponse"<���-+/v1/{parent=projects/*/locations/*}/targets�Aparent�
	GetTarget(.google.cloud.deploy.v1.GetTargetRequest.google.cloud.deploy.v1.Target":���-+/v1/{name=projects/*/locations/*/targets/*}�Aname�
CreateTarget+.google.cloud.deploy.v1.CreateTargetRequest.google.longrunning.Operation"s���5"+/v1/{parent=projects/*/locations/*}/targets:target�Aparent,target,target_id�A
TargetOperationMetadata�
UpdateTarget+.google.cloud.deploy.v1.UpdateTargetRequest.google.longrunning.Operation"u���<22/v1/{target.name=projects/*/locations/*/targets/*}:target�Atarget,update_mask�A
TargetOperationMetadata�
DeleteTarget+.google.cloud.deploy.v1.DeleteTargetRequest.google.longrunning.Operation"g���-*+/v1/{name=projects/*/locations/*/targets/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListReleases+.google.cloud.deploy.v1.ListReleasesRequest,.google.cloud.deploy.v1.ListReleasesResponse"Q���B@/v1/{parent=projects/*/locations/*/deliveryPipelines/*}/releases�Aparent�

GetRelease).google.cloud.deploy.v1.GetReleaseRequest.google.cloud.deploy.v1.Release"O���B@/v1/{name=projects/*/locations/*/deliveryPipelines/*/releases/*}�Aname�
CreateRelease,.google.cloud.deploy.v1.CreateReleaseRequest.google.longrunning.Operation"����K"@/v1/{parent=projects/*/locations/*/deliveryPipelines/*}/releases:release�Aparent,release,release_id�A
ReleaseOperationMetadata�
AbandonRelease-.google.cloud.deploy.v1.AbandonReleaseRequest..google.cloud.deploy.v1.AbandonReleaseResponse"Z���M"H/v1/{name=projects/*/locations/*/deliveryPipelines/*/releases/*}:abandon:*�Aname�
ApproveRollout-.google.cloud.deploy.v1.ApproveRolloutRequest..google.cloud.deploy.v1.ApproveRolloutResponse"e���X"S/v1/{name=projects/*/locations/*/deliveryPipelines/*/releases/*/rollouts/*}:approve:*�Aname�
AdvanceRollout-.google.cloud.deploy.v1.AdvanceRolloutRequest..google.cloud.deploy.v1.AdvanceRolloutResponse"n���X"S/v1/{name=projects/*/locations/*/deliveryPipelines/*/releases/*/rollouts/*}:advance:*�Aname,phase_id�
CancelRollout,.google.cloud.deploy.v1.CancelRolloutRequest-.google.cloud.deploy.v1.CancelRolloutResponse"d���W"R/v1/{name=projects/*/locations/*/deliveryPipelines/*/releases/*/rollouts/*}:cancel:*�Aname�
ListRollouts+.google.cloud.deploy.v1.ListRolloutsRequest,.google.cloud.deploy.v1.ListRolloutsResponse"\\���MK/v1/{parent=projects/*/locations/*/deliveryPipelines/*/releases/*}/rollouts�Aparent�

GetRollout).google.cloud.deploy.v1.GetRolloutRequest.google.cloud.deploy.v1.Rollout"Z���MK/v1/{name=projects/*/locations/*/deliveryPipelines/*/releases/*/rollouts/*}�Aname�
CreateRollout,.google.cloud.deploy.v1.CreateRolloutRequest.google.longrunning.Operation"����V"K/v1/{parent=projects/*/locations/*/deliveryPipelines/*/releases/*}/rollouts:rollout�Aparent,rollout,rollout_id�A
RolloutOperationMetadata�
	IgnoreJob(.google.cloud.deploy.v1.IgnoreJobRequest).google.cloud.deploy.v1.IgnoreJobResponse"}���]"X/v1/{rollout=projects/*/locations/*/deliveryPipelines/*/releases/*/rollouts/*}:ignoreJob:*�Arollout,phase_id,job_id�
RetryJob\'.google.cloud.deploy.v1.RetryJobRequest(.google.cloud.deploy.v1.RetryJobResponse"|���\\"W/v1/{rollout=projects/*/locations/*/deliveryPipelines/*/releases/*/rollouts/*}:retryJob:*�Arollout,phase_id,job_id�
ListJobRuns*.google.cloud.deploy.v1.ListJobRunsRequest+.google.cloud.deploy.v1.ListJobRunsResponse"f���WU/v1/{parent=projects/*/locations/*/deliveryPipelines/*/releases/*/rollouts/*}/jobRuns�Aparent�
	GetJobRun(.google.cloud.deploy.v1.GetJobRunRequest.google.cloud.deploy.v1.JobRun"d���WU/v1/{name=projects/*/locations/*/deliveryPipelines/*/releases/*/rollouts/*/jobRuns/*}�Aname�
TerminateJobRun..google.cloud.deploy.v1.TerminateJobRunRequest/.google.cloud.deploy.v1.TerminateJobRunResponse"q���d"_/v1/{name=projects/*/locations/*/deliveryPipelines/*/releases/*/rollouts/*/jobRuns/*}:terminate:*�Aname�
	GetConfig(.google.cloud.deploy.v1.GetConfigRequest.google.cloud.deploy.v1.Config"7���*(/v1/{name=projects/*/locations/*/config}�AnameN�Aclouddeploy.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.deploy.v1BCloudDeployProtoPZ2cloud.google.com/go/deploy/apiv1/deploypb;deploypb�AY
cloudbuild.googleapis.com/Build6projects/{project}/locations/{location}/builds/{build}�A^
 container.googleapis.com/Cluster:projects/{project}/locations/{location}/clusters/{cluster}�Af
$clouddeploy.googleapis.com/Operation>projects/{project}/locations/{location}/operations/{operation}�Ai
$cloudbuild.googleapis.com/WorkerPoolAprojects/{project}/locations/{location}/workerPools/{worker_pool}�Ad
 gkehub.googleapis.com/Membership@projects/{project}/locations/{location}/memberships/{membership}�AX
run.googleapis.com/Service:projects/{project}/locations/{location}/services/{service}bproto3'
        , true);

        static::$is_initialized = true;
    }
}


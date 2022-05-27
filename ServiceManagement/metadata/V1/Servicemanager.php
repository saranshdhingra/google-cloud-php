<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace GPBMetadata\Google\Api\Servicemanagement\V1;

class Servicemanager
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
        \GPBMetadata\Google\Api\Service::initOnce();
        \GPBMetadata\Google\Api\Servicemanagement\V1\Resources::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(
            '
�.
4google/api/servicemanagement/v1/servicemanager.protogoogle.api.servicemanagement.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/service.proto/google/api/servicemanagement/v1/resources.proto#google/longrunning/operations.protogoogle/protobuf/any.proto"r
ListServicesRequest
producer_project_id (	
	page_size (

page_token (	
consumer_id (	B"r
ListServicesResponseA
services (2/.google.api.servicemanagement.v1.ManagedService
next_page_token (	".
GetServiceRequest
service_name (	B�A"]
CreateServiceRequestE
service (2/.google.api.servicemanagement.v1.ManagedServiceB�A"1
DeleteServiceRequest
service_name (	B�A"3
UndeleteServiceRequest
service_name (	B�A"[
UndeleteServiceResponse@
service (2/.google.api.servicemanagement.v1.ManagedService"�
GetServiceConfigRequest
service_name (	B�A
	config_id (	B�AQ
view (2C.google.api.servicemanagement.v1.GetServiceConfigRequest.ConfigView"!

ConfigView	
BASIC 
FULL"]
ListServiceConfigsRequest
service_name (	B�A

page_token (	
	page_size ("c
ListServiceConfigsResponse,
service_configs (2.google.api.Service
next_page_token (	"i
CreateServiceConfigRequest
service_name (	B�A0
service_config (2.google.api.ServiceB�A"�
SubmitConfigSourceRequest
service_name (	B�AI
config_source (2-.google.api.servicemanagement.v1.ConfigSourceB�A
validate_only (B�A"I
SubmitConfigSourceResponse+
service_config (2.google.api.Service"x
CreateServiceRolloutRequest
service_name (	B�A>
rollout (2(.google.api.servicemanagement.v1.RolloutB�A"s
ListServiceRolloutsRequest
service_name (	B�A

page_token (	
	page_size (
filter (	B�A"r
ListServiceRolloutsResponse:
rollouts (2(.google.api.servicemanagement.v1.Rollout
next_page_token (	"N
GetServiceRolloutRequest
service_name (	B�A

rollout_id (	B�A"{
GenerateConfigReportRequest-

new_config (2.google.protobuf.AnyB�A-

old_config (2.google.protobuf.AnyB�A"�
GenerateConfigReportResponse
service_name (	

id (	E
change_reports (2-.google.api.servicemanagement.v1.ChangeReport@
diagnostics (2+.google.api.servicemanagement.v1.Diagnostic2�
ServiceManager�
ListServices4.google.api.servicemanagement.v1.ListServicesRequest5.google.api.servicemanagement.v1.ListServicesResponse"6���/v1/services�Aproducer_project_id,consumer_id�

GetService2.google.api.servicemanagement.v1.GetServiceRequest/.google.api.servicemanagement.v1.ManagedService"2���/v1/services/{service_name}�Aservice_name�
CreateService5.google.api.servicemanagement.v1.CreateServiceRequest.google.longrunning.Operation"����"/v1/services:service�Aservice�Ac
.google.api.servicemanagement.v1.ManagedService1google.api.servicemanagement.v1.OperationMetadata�
DeleteService5.google.api.servicemanagement.v1.DeleteServiceRequest.google.longrunning.Operation"���*/v1/services/{service_name}�Aservice_name�AJ
google.protobuf.Empty1google.api.servicemanagement.v1.OperationMetadata�
UndeleteService7.google.api.servicemanagement.v1.UndeleteServiceRequest.google.longrunning.Operation"����&"$/v1/services/{service_name}:undelete�Aservice_name�Al
7google.api.servicemanagement.v1.UndeleteServiceResponse1google.api.servicemanagement.v1.OperationMetadata�
ListServiceConfigs:.google.api.servicemanagement.v1.ListServiceConfigsRequest;.google.api.servicemanagement.v1.ListServiceConfigsResponse":���%#/v1/services/{service_name}/configs�Aservice_name�
GetServiceConfig8.google.api.servicemanagement.v1.GetServiceConfigRequest.google.api.Service"{���W//v1/services/{service_name}/configs/{config_id}Z$"/v1/services/{service_name}/config�Aservice_name,config_id,view�
CreateServiceConfig;.google.api.servicemanagement.v1.CreateServiceConfigRequest.google.api.Service"Y���5"#/v1/services/{service_name}/configs:service_config�Aservice_name,service_config�
SubmitConfigSource:.google.api.servicemanagement.v1.SubmitConfigSourceRequest.google.longrunning.Operation"����/"*/v1/services/{service_name}/configs:submit:*�A(service_name,config_source,validate_only�Ao
:google.api.servicemanagement.v1.SubmitConfigSourceResponse1google.api.servicemanagement.v1.OperationMetadata�
ListServiceRollouts;.google.api.servicemanagement.v1.ListServiceRolloutsRequest<.google.api.servicemanagement.v1.ListServiceRolloutsResponse"B���&$/v1/services/{service_name}/rollouts�Aservice_name,filter�
GetServiceRollout9.google.api.servicemanagement.v1.GetServiceRolloutRequest(.google.api.servicemanagement.v1.Rollout"S���31/v1/services/{service_name}/rollouts/{rollout_id}�Aservice_name,rollout_id�
CreateServiceRollout<.google.api.servicemanagement.v1.CreateServiceRolloutRequest.google.longrunning.Operation"����/"$/v1/services/{service_name}/rollouts:rollout�Aservice_name,rollout�A\\
\'google.api.servicemanagement.v1.Rollout1google.api.servicemanagement.v1.OperationMetadata�
GenerateConfigReport<.google.api.servicemanagement.v1.GenerateConfigReportRequest=.google.api.servicemanagement.v1.GenerateConfigReportResponse"D���&"!/v1/services:generateConfigReport:*�Anew_config,old_config��A servicemanagement.googleapis.com�A�https://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-platform.read-only,https://www.googleapis.com/auth/service.management,https://www.googleapis.com/auth/service.management.readonlyB�
#com.google.api.servicemanagement.v1BServiceManagerProtoPZPgoogle.golang.org/genproto/googleapis/api/servicemanagement/v1;servicemanagement�GASM�!Google.Cloud.ServiceManagement.V1�!Google\\Cloud\\ServiceManagement\\V1�$Google::Cloud::ServiceManagement::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}


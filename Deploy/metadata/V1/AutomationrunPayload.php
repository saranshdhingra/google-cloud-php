<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/automationrun_payload.proto

namespace GPBMetadata\Google\Cloud\Deploy\V1;

class AutomationrunPayload
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Deploy\V1\LogEnums::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
2google/cloud/deploy/v1/automationrun_payload.protogoogle.cloud.deploy.v1"�
AutomationRunEvent
message (	
automation_run (	
pipeline_uid (	
automation_id (	
rule_id (	
destination_target_id (	*
type (2.google.cloud.deploy.v1.TypeBm
com.google.cloud.deploy.v1BAutomationRunPayloadProtoPZ2cloud.google.com/go/deploy/apiv1/deploypb;deploypbbproto3'
        , true);

        static::$is_initialized = true;
    }
}


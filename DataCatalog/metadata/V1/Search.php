<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/search.proto

namespace GPBMetadata\Google\Cloud\Datacatalog\V1;

class Search
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
(google/cloud/datacatalog/v1/search.protogoogle.cloud.datacatalog.v1(google/cloud/datacatalog/v1/common.protogoogle/protobuf/timestamp.proto"�
SearchCatalogResultI
search_result_type (2-.google.cloud.datacatalog.v1.SearchResultType
search_result_subtype (	
relative_resource_name (	
linked_resource (	/
modify_time (2.google.protobuf.TimestampO
integrated_system (2-.google.cloud.datacatalog.v1.IntegratedSystemB�AH 
user_specified_system	 (	H 
fully_qualified_name
 (	B
system*d
SearchResultType"
SEARCH_RESULT_TYPE_UNSPECIFIED 	
ENTRY
TAG_TEMPLATE
ENTRY_GROUPB�
com.google.cloud.datacatalog.v1PZFgoogle.golang.org/genproto/googleapis/cloud/datacatalog/v1;datacatalog��Google.Cloud.DataCatalog.V1�Google\\Cloud\\DataCatalog\\V1�Google::Cloud::DataCatalog::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}


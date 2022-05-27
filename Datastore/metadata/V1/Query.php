<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/query.proto

namespace GPBMetadata\Google\Datastore\V1;

class Query
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Datastore\V1\Entity::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
google/datastore/v1/query.protogoogle.datastore.v1google/protobuf/timestamp.protogoogle/protobuf/wrappers.proto"�
EntityResult+
entity (2.google.datastore.v1.Entity
version (/
update_time (2.google.protobuf.Timestamp
cursor ("Q

ResultType
RESULT_TYPE_UNSPECIFIED 
FULL

PROJECTION
KEY_ONLY"�
Query3

projection (2.google.datastore.v1.Projection1
kind (2#.google.datastore.v1.KindExpression+
filter (2.google.datastore.v1.Filter1
order (2".google.datastore.v1.PropertyOrder;
distinct_on (2&.google.datastore.v1.PropertyReference
start_cursor (

end_cursor (
offset
 (*
limit (2.google.protobuf.Int32Value"
KindExpression
name (	"!
PropertyReference
name (	"F

Projection8
property (2&.google.datastore.v1.PropertyReference"�
PropertyOrder8
property (2&.google.datastore.v1.PropertyReference?
	direction (2,.google.datastore.v1.PropertyOrder.Direction"E
	Direction
DIRECTION_UNSPECIFIED 
	ASCENDING

DESCENDING"�
Filter@
composite_filter (2$.google.datastore.v1.CompositeFilterH >
property_filter (2#.google.datastore.v1.PropertyFilterH B
filter_type"�
CompositeFilter9
op (2-.google.datastore.v1.CompositeFilter.Operator,
filters (2.google.datastore.v1.Filter"-
Operator
OPERATOR_UNSPECIFIED 
AND"�
PropertyFilter8
property (2&.google.datastore.v1.PropertyReference8
op (2,.google.datastore.v1.PropertyFilter.Operator)
value (2.google.datastore.v1.Value"�
Operator
OPERATOR_UNSPECIFIED 
	LESS_THAN
LESS_THAN_OR_EQUAL
GREATER_THAN
GREATER_THAN_OR_EQUAL	
EQUAL
IN
	NOT_EQUAL	
HAS_ANCESTOR

NOT_IN"�
GqlQuery
query_string (	
allow_literals (H
named_bindings (20.google.datastore.v1.GqlQuery.NamedBindingsEntryC
positional_bindings (2&.google.datastore.v1.GqlQueryParameter\\
NamedBindingsEntry
key (	5
value (2&.google.datastore.v1.GqlQueryParameter:8"d
GqlQueryParameter+
value (2.google.datastore.v1.ValueH 
cursor (H B
parameter_type"�
QueryResultBatch
skipped_results (
skipped_cursor (H
entity_result_type (2,.google.datastore.v1.EntityResult.ResultType9
entity_results (2!.google.datastore.v1.EntityResult

end_cursor (K
more_results (25.google.datastore.v1.QueryResultBatch.MoreResultsType
snapshot_version (-
	read_time (2.google.protobuf.Timestamp"�
MoreResultsType!
MORE_RESULTS_TYPE_UNSPECIFIED 
NOT_FINISHED
MORE_RESULTS_AFTER_LIMIT
MORE_RESULTS_AFTER_CURSOR
NO_MORE_RESULTSB�
com.google.datastore.v1B
QueryProtoPZ<google.golang.org/genproto/googleapis/datastore/v1;datastore�Google.Cloud.Datastore.V1�Google\\Cloud\\Datastore\\V1�Google::Cloud::Datastore::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}


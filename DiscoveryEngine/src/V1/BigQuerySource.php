<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/import_config.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BigQuery source import data from.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.BigQuerySource</code>
 */
class BigQuerySource extends \Google\Protobuf\Internal\Message
{
    /**
     * The project ID (can be project # or ID) that the BigQuery source is in with
     * a length limit of 128 characters. If not specified, inherits the project
     * ID from the parent request.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    protected $project_id = '';
    /**
     * Required. The BigQuery data set to copy the data from with a length limit
     * of 1,024 characters.
     *
     * Generated from protobuf field <code>string dataset_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $dataset_id = '';
    /**
     * Required. The BigQuery table to copy the data from with a length limit of
     * 1,024 characters.
     *
     * Generated from protobuf field <code>string table_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $table_id = '';
    /**
     * Intermediate Cloud Storage directory used for the import with a length
     * limit of 2,000 characters. Can be specified if one wants to have the
     * BigQuery export to a specific Cloud Storage directory.
     *
     * Generated from protobuf field <code>string gcs_staging_dir = 4;</code>
     */
    protected $gcs_staging_dir = '';
    /**
     * The schema to use when parsing the data from the source.
     * Supported values for user event imports:
     * * `user_event` (default): One
     * [UserEvent][google.cloud.discoveryengine.v1.UserEvent] per row.
     * Supported values for document imports:
     * * `document` (default): One
     * [Document][google.cloud.discoveryengine.v1.Document] format per
     *   row. Each document must have a valid
     *   [Document.id][google.cloud.discoveryengine.v1.Document.id] and one of
     *   [Document.json_data][google.cloud.discoveryengine.v1.Document.json_data]
     *   or
     *   [Document.struct_data][google.cloud.discoveryengine.v1.Document.struct_data].
     * * `custom`: One custom data per row in arbitrary format that conforms to
     *   the defined [Schema][google.cloud.discoveryengine.v1.Schema] of the data
     *   store. This can only be used by Gen App Builder.
     *
     * Generated from protobuf field <code>string data_schema = 6;</code>
     */
    protected $data_schema = '';
    protected $partition;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Type\Date $partition_date
     *           BigQuery time partitioned table's _PARTITIONDATE in YYYY-MM-DD format.
     *     @type string $project_id
     *           The project ID (can be project # or ID) that the BigQuery source is in with
     *           a length limit of 128 characters. If not specified, inherits the project
     *           ID from the parent request.
     *     @type string $dataset_id
     *           Required. The BigQuery data set to copy the data from with a length limit
     *           of 1,024 characters.
     *     @type string $table_id
     *           Required. The BigQuery table to copy the data from with a length limit of
     *           1,024 characters.
     *     @type string $gcs_staging_dir
     *           Intermediate Cloud Storage directory used for the import with a length
     *           limit of 2,000 characters. Can be specified if one wants to have the
     *           BigQuery export to a specific Cloud Storage directory.
     *     @type string $data_schema
     *           The schema to use when parsing the data from the source.
     *           Supported values for user event imports:
     *           * `user_event` (default): One
     *           [UserEvent][google.cloud.discoveryengine.v1.UserEvent] per row.
     *           Supported values for document imports:
     *           * `document` (default): One
     *           [Document][google.cloud.discoveryengine.v1.Document] format per
     *             row. Each document must have a valid
     *             [Document.id][google.cloud.discoveryengine.v1.Document.id] and one of
     *             [Document.json_data][google.cloud.discoveryengine.v1.Document.json_data]
     *             or
     *             [Document.struct_data][google.cloud.discoveryengine.v1.Document.struct_data].
     *           * `custom`: One custom data per row in arbitrary format that conforms to
     *             the defined [Schema][google.cloud.discoveryengine.v1.Schema] of the data
     *             store. This can only be used by Gen App Builder.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ImportConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * BigQuery time partitioned table's _PARTITIONDATE in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>.google.type.Date partition_date = 5;</code>
     * @return \Google\Type\Date|null
     */
    public function getPartitionDate()
    {
        return $this->readOneof(5);
    }

    public function hasPartitionDate()
    {
        return $this->hasOneof(5);
    }

    /**
     * BigQuery time partitioned table's _PARTITIONDATE in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>.google.type.Date partition_date = 5;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setPartitionDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The project ID (can be project # or ID) that the BigQuery source is in with
     * a length limit of 128 characters. If not specified, inherits the project
     * ID from the parent request.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * The project ID (can be project # or ID) that the BigQuery source is in with
     * a length limit of 128 characters. If not specified, inherits the project
     * ID from the parent request.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. The BigQuery data set to copy the data from with a length limit
     * of 1,024 characters.
     *
     * Generated from protobuf field <code>string dataset_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatasetId()
    {
        return $this->dataset_id;
    }

    /**
     * Required. The BigQuery data set to copy the data from with a length limit
     * of 1,024 characters.
     *
     * Generated from protobuf field <code>string dataset_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatasetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset_id = $var;

        return $this;
    }

    /**
     * Required. The BigQuery table to copy the data from with a length limit of
     * 1,024 characters.
     *
     * Generated from protobuf field <code>string table_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTableId()
    {
        return $this->table_id;
    }

    /**
     * Required. The BigQuery table to copy the data from with a length limit of
     * 1,024 characters.
     *
     * Generated from protobuf field <code>string table_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTableId($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_id = $var;

        return $this;
    }

    /**
     * Intermediate Cloud Storage directory used for the import with a length
     * limit of 2,000 characters. Can be specified if one wants to have the
     * BigQuery export to a specific Cloud Storage directory.
     *
     * Generated from protobuf field <code>string gcs_staging_dir = 4;</code>
     * @return string
     */
    public function getGcsStagingDir()
    {
        return $this->gcs_staging_dir;
    }

    /**
     * Intermediate Cloud Storage directory used for the import with a length
     * limit of 2,000 characters. Can be specified if one wants to have the
     * BigQuery export to a specific Cloud Storage directory.
     *
     * Generated from protobuf field <code>string gcs_staging_dir = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setGcsStagingDir($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcs_staging_dir = $var;

        return $this;
    }

    /**
     * The schema to use when parsing the data from the source.
     * Supported values for user event imports:
     * * `user_event` (default): One
     * [UserEvent][google.cloud.discoveryengine.v1.UserEvent] per row.
     * Supported values for document imports:
     * * `document` (default): One
     * [Document][google.cloud.discoveryengine.v1.Document] format per
     *   row. Each document must have a valid
     *   [Document.id][google.cloud.discoveryengine.v1.Document.id] and one of
     *   [Document.json_data][google.cloud.discoveryengine.v1.Document.json_data]
     *   or
     *   [Document.struct_data][google.cloud.discoveryengine.v1.Document.struct_data].
     * * `custom`: One custom data per row in arbitrary format that conforms to
     *   the defined [Schema][google.cloud.discoveryengine.v1.Schema] of the data
     *   store. This can only be used by Gen App Builder.
     *
     * Generated from protobuf field <code>string data_schema = 6;</code>
     * @return string
     */
    public function getDataSchema()
    {
        return $this->data_schema;
    }

    /**
     * The schema to use when parsing the data from the source.
     * Supported values for user event imports:
     * * `user_event` (default): One
     * [UserEvent][google.cloud.discoveryengine.v1.UserEvent] per row.
     * Supported values for document imports:
     * * `document` (default): One
     * [Document][google.cloud.discoveryengine.v1.Document] format per
     *   row. Each document must have a valid
     *   [Document.id][google.cloud.discoveryengine.v1.Document.id] and one of
     *   [Document.json_data][google.cloud.discoveryengine.v1.Document.json_data]
     *   or
     *   [Document.struct_data][google.cloud.discoveryengine.v1.Document.struct_data].
     * * `custom`: One custom data per row in arbitrary format that conforms to
     *   the defined [Schema][google.cloud.discoveryengine.v1.Schema] of the data
     *   store. This can only be used by Gen App Builder.
     *
     * Generated from protobuf field <code>string data_schema = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDataSchema($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_schema = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getPartition()
    {
        return $this->whichOneof("partition");
    }

}


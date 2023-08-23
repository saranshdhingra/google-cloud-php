<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/document.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [Documents.ImportDocuments][google.cloud.dialogflow.v2.Documents.ImportDocuments].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ImportDocumentsRequest</code>
 */
class ImportDocumentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The knowledge base to import documents into.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. Document template used for importing all the documents.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.ImportDocumentTemplate document_template = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $document_template = null;
    /**
     * Whether to import custom metadata from Google Cloud Storage.
     * Only valid when the document source is Google Cloud Storage URI.
     *
     * Generated from protobuf field <code>bool import_gcs_custom_metadata = 4;</code>
     */
    private $import_gcs_custom_metadata = false;
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The knowledge base to import documents into.
     *           Format: `projects/<Project ID>/locations/<Location
     *           ID>/knowledgeBases/<Knowledge Base ID>`.
     *     @type \Google\Cloud\Dialogflow\V2\GcsSources $gcs_source
     *           Optional. The Google Cloud Storage location for the documents.
     *           The path can include a wildcard.
     *           These URIs may have the forms
     *           `gs://<bucket-name>/<object-name>`.
     *           `gs://<bucket-name>/<object-path>/&#42;.<extension>`.
     *     @type \Google\Cloud\Dialogflow\V2\ImportDocumentTemplate $document_template
     *           Required. Document template used for importing all the documents.
     *     @type bool $import_gcs_custom_metadata
     *           Whether to import custom metadata from Google Cloud Storage.
     *           Only valid when the document source is Google Cloud Storage URI.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The knowledge base to import documents into.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The knowledge base to import documents into.
     * Format: `projects/<Project ID>/locations/<Location
     * ID>/knowledgeBases/<Knowledge Base ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The Google Cloud Storage location for the documents.
     * The path can include a wildcard.
     * These URIs may have the forms
     * `gs://<bucket-name>/<object-name>`.
     * `gs://<bucket-name>/<object-path>/&#42;.<extension>`.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.GcsSources gcs_source = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dialogflow\V2\GcsSources|null
     */
    public function getGcsSource()
    {
        return $this->readOneof(2);
    }

    public function hasGcsSource()
    {
        return $this->hasOneof(2);
    }

    /**
     * Optional. The Google Cloud Storage location for the documents.
     * The path can include a wildcard.
     * These URIs may have the forms
     * `gs://<bucket-name>/<object-name>`.
     * `gs://<bucket-name>/<object-path>/&#42;.<extension>`.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.GcsSources gcs_source = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\V2\GcsSources $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\GcsSources::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Required. Document template used for importing all the documents.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.ImportDocumentTemplate document_template = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\ImportDocumentTemplate|null
     */
    public function getDocumentTemplate()
    {
        return $this->document_template;
    }

    public function hasDocumentTemplate()
    {
        return isset($this->document_template);
    }

    public function clearDocumentTemplate()
    {
        unset($this->document_template);
    }

    /**
     * Required. Document template used for importing all the documents.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.ImportDocumentTemplate document_template = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\ImportDocumentTemplate $var
     * @return $this
     */
    public function setDocumentTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\ImportDocumentTemplate::class);
        $this->document_template = $var;

        return $this;
    }

    /**
     * Whether to import custom metadata from Google Cloud Storage.
     * Only valid when the document source is Google Cloud Storage URI.
     *
     * Generated from protobuf field <code>bool import_gcs_custom_metadata = 4;</code>
     * @return bool
     */
    public function getImportGcsCustomMetadata()
    {
        return $this->import_gcs_custom_metadata;
    }

    /**
     * Whether to import custom metadata from Google Cloud Storage.
     * Only valid when the document source is Google Cloud Storage URI.
     *
     * Generated from protobuf field <code>bool import_gcs_custom_metadata = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setImportGcsCustomMetadata($var)
    {
        GPBUtil::checkBool($var);
        $this->import_gcs_custom_metadata = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [KeyManagementService.MacSign][google.cloud.kms.v1.KeyManagementService.MacSign].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.MacSignRequest</code>
 */
class MacSignRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use for
     * signing.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The data to sign. The MAC tag is computed over this data field
     * based on the specific algorithm.
     *
     * Generated from protobuf field <code>bytes data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $data = '';
    /**
     * Optional. An optional CRC32C checksum of the
     * [MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data]. If
     * specified, [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will verify the integrity of the received
     * [MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data] using this
     * checksum. [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data]) is
     * equal to
     * [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value data_crc32c = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $data_crc32c = null;

    /**
     * @param string $name Required. The resource name of the
     *                     [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use for
     *                     signing. Please see
     *                     {@see KeyManagementServiceClient::cryptoKeyVersionName()} for help formatting this field.
     * @param string $data Required. The data to sign. The MAC tag is computed over this data field
     *                     based on the specific algorithm.
     *
     * @return \Google\Cloud\Kms\V1\MacSignRequest
     *
     * @experimental
     */
    public static function build(string $name, string $data): self
    {
        return (new self())
            ->setName($name)
            ->setData($data);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the
     *           [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use for
     *           signing.
     *     @type string $data
     *           Required. The data to sign. The MAC tag is computed over this data field
     *           based on the specific algorithm.
     *     @type \Google\Protobuf\Int64Value $data_crc32c
     *           Optional. An optional CRC32C checksum of the
     *           [MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data]. If
     *           specified, [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     *           will verify the integrity of the received
     *           [MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data] using this
     *           checksum. [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     *           will report an error if the checksum verification fails. If you receive a
     *           checksum error, your client should verify that
     *           CRC32C([MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data]) is
     *           equal to
     *           [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c],
     *           and if so, perform a limited number of retries. A persistent mismatch may
     *           indicate an issue in your computation of the CRC32C checksum. Note: This
     *           field is defined as int64 for reasons of compatibility across different
     *           languages. However, it is a non-negative integer, which will never exceed
     *           2^32-1, and can be safely downconverted to uint32 in languages that support
     *           this type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use for
     * signing.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the
     * [CryptoKeyVersion][google.cloud.kms.v1.CryptoKeyVersion] to use for
     * signing.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The data to sign. The MAC tag is computed over this data field
     * based on the specific algorithm.
     *
     * Generated from protobuf field <code>bytes data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Required. The data to sign. The MAC tag is computed over this data field
     * based on the specific algorithm.
     *
     * Generated from protobuf field <code>bytes data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Optional. An optional CRC32C checksum of the
     * [MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data]. If
     * specified, [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will verify the integrity of the received
     * [MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data] using this
     * checksum. [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data]) is
     * equal to
     * [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value data_crc32c = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getDataCrc32C()
    {
        return $this->data_crc32c;
    }

    public function hasDataCrc32C()
    {
        return isset($this->data_crc32c);
    }

    public function clearDataCrc32C()
    {
        unset($this->data_crc32c);
    }

    /**
     * Returns the unboxed value from <code>getDataCrc32C()</code>

     * Optional. An optional CRC32C checksum of the
     * [MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data]. If
     * specified, [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will verify the integrity of the received
     * [MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data] using this
     * checksum. [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data]) is
     * equal to
     * [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value data_crc32c = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string|null
     */
    public function getDataCrc32CValue()
    {
        return $this->readWrapperValue("data_crc32c");
    }

    /**
     * Optional. An optional CRC32C checksum of the
     * [MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data]. If
     * specified, [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will verify the integrity of the received
     * [MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data] using this
     * checksum. [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data]) is
     * equal to
     * [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value data_crc32c = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setDataCrc32C($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->data_crc32c = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Optional. An optional CRC32C checksum of the
     * [MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data]. If
     * specified, [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will verify the integrity of the received
     * [MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data] using this
     * checksum. [KeyManagementService][google.cloud.kms.v1.KeyManagementService]
     * will report an error if the checksum verification fails. If you receive a
     * checksum error, your client should verify that
     * CRC32C([MacSignRequest.data][google.cloud.kms.v1.MacSignRequest.data]) is
     * equal to
     * [MacSignRequest.data_crc32c][google.cloud.kms.v1.MacSignRequest.data_crc32c],
     * and if so, perform a limited number of retries. A persistent mismatch may
     * indicate an issue in your computation of the CRC32C checksum. Note: This
     * field is defined as int64 for reasons of compatibility across different
     * languages. However, it is a non-negative integer, which will never exceed
     * 2^32-1, and can be safely downconverted to uint32 in languages that support
     * this type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value data_crc32c = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setDataCrc32CValue($var)
    {
        $this->writeWrapperValue("data_crc32c", $var);
        return $this;}

}


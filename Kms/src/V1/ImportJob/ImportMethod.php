<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/resources.proto

namespace Google\Cloud\Kms\V1\ImportJob;

use UnexpectedValueException;

/**
 * [ImportMethod][google.cloud.kms.v1.ImportJob.ImportMethod] describes the
 * key wrapping method chosen for this
 * [ImportJob][google.cloud.kms.v1.ImportJob].
 *
 * Protobuf type <code>google.cloud.kms.v1.ImportJob.ImportMethod</code>
 */
class ImportMethod
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>IMPORT_METHOD_UNSPECIFIED = 0;</code>
     */
    const IMPORT_METHOD_UNSPECIFIED = 0;
    /**
     * This ImportMethod represents the CKM_RSA_AES_KEY_WRAP key wrapping
     * scheme defined in the PKCS #11 standard. In summary, this involves
     * wrapping the raw key with an ephemeral AES key, and wrapping the
     * ephemeral AES key with a 3072 bit RSA key. For more details, see
     * [RSA AES key wrap
     * mechanism](http://docs.oasis-open.org/pkcs11/pkcs11-curr/v2.40/cos01/pkcs11-curr-v2.40-cos01.html#_Toc408226908).
     *
     * Generated from protobuf enum <code>RSA_OAEP_3072_SHA1_AES_256 = 1;</code>
     */
    const RSA_OAEP_3072_SHA1_AES_256 = 1;
    /**
     * This ImportMethod represents the CKM_RSA_AES_KEY_WRAP key wrapping
     * scheme defined in the PKCS #11 standard. In summary, this involves
     * wrapping the raw key with an ephemeral AES key, and wrapping the
     * ephemeral AES key with a 4096 bit RSA key. For more details, see
     * [RSA AES key wrap
     * mechanism](http://docs.oasis-open.org/pkcs11/pkcs11-curr/v2.40/cos01/pkcs11-curr-v2.40-cos01.html#_Toc408226908).
     *
     * Generated from protobuf enum <code>RSA_OAEP_4096_SHA1_AES_256 = 2;</code>
     */
    const RSA_OAEP_4096_SHA1_AES_256 = 2;

    private static $valueToName = [
        self::IMPORT_METHOD_UNSPECIFIED => 'IMPORT_METHOD_UNSPECIFIED',
        self::RSA_OAEP_3072_SHA1_AES_256 => 'RSA_OAEP_3072_SHA1_AES_256',
        self::RSA_OAEP_4096_SHA1_AES_256 => 'RSA_OAEP_4096_SHA1_AES_256',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImportMethod::class, \Google\Cloud\Kms\V1\ImportJob_ImportMethod::class);


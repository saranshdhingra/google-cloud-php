<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CloudChannelService.ListTransferableOffers][google.cloud.channel.v1.CloudChannelService.ListTransferableOffers]
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListTransferableOffersRequest</code>
 */
class ListTransferableOffersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the reseller's account.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parent = '';
    /**
     * Requested page size. Server might return fewer results than requested.
     * If unspecified, returns at most 100 offers.
     * The maximum value is 1000; the server will coerce values above 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * A token for a page of results other than the first page.
     * Obtained using
     * [ListTransferableOffersResponse.next_page_token][google.cloud.channel.v1.ListTransferableOffersResponse.next_page_token]
     * of the previous
     * [CloudChannelService.ListTransferableOffers][google.cloud.channel.v1.CloudChannelService.ListTransferableOffers]
     * call.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * Required. The SKU to look up Offers for.
     *
     * Generated from protobuf field <code>string sku = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $sku = '';
    /**
     * Optional. The BCP-47 language code. For example, "en-US". The
     * response will localize in the corresponding language code, if specified.
     * The default value is "en-US".
     *
     * Generated from protobuf field <code>string language_code = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $language_code = '';
    /**
     * Optional. The Billing Account to look up Offers for. Format:
     * accounts/{account_id}/billingAccounts/{billing_account_id}.
     * This field is only relevant for multi-currency accounts. It should be left
     * empty for single currency accounts.
     *
     * Generated from protobuf field <code>string billing_account = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $billing_account = '';
    protected $transferred_customer_identity;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cloud_identity_id
     *           Customer's Cloud Identity ID
     *     @type string $customer_name
     *           A reseller should create a customer and use the resource name of
     *           that customer here.
     *     @type string $parent
     *           Required. The resource name of the reseller's account.
     *     @type int $page_size
     *           Requested page size. Server might return fewer results than requested.
     *           If unspecified, returns at most 100 offers.
     *           The maximum value is 1000; the server will coerce values above 1000.
     *     @type string $page_token
     *           A token for a page of results other than the first page.
     *           Obtained using
     *           [ListTransferableOffersResponse.next_page_token][google.cloud.channel.v1.ListTransferableOffersResponse.next_page_token]
     *           of the previous
     *           [CloudChannelService.ListTransferableOffers][google.cloud.channel.v1.CloudChannelService.ListTransferableOffers]
     *           call.
     *     @type string $sku
     *           Required. The SKU to look up Offers for.
     *     @type string $language_code
     *           Optional. The BCP-47 language code. For example, "en-US". The
     *           response will localize in the corresponding language code, if specified.
     *           The default value is "en-US".
     *     @type string $billing_account
     *           Optional. The Billing Account to look up Offers for. Format:
     *           accounts/{account_id}/billingAccounts/{billing_account_id}.
     *           This field is only relevant for multi-currency accounts. It should be left
     *           empty for single currency accounts.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Customer's Cloud Identity ID
     *
     * Generated from protobuf field <code>string cloud_identity_id = 4;</code>
     * @return string
     */
    public function getCloudIdentityId()
    {
        return $this->readOneof(4);
    }

    public function hasCloudIdentityId()
    {
        return $this->hasOneof(4);
    }

    /**
     * Customer's Cloud Identity ID
     *
     * Generated from protobuf field <code>string cloud_identity_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCloudIdentityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A reseller should create a customer and use the resource name of
     * that customer here.
     *
     * Generated from protobuf field <code>string customer_name = 5;</code>
     * @return string
     */
    public function getCustomerName()
    {
        return $this->readOneof(5);
    }

    public function hasCustomerName()
    {
        return $this->hasOneof(5);
    }

    /**
     * A reseller should create a customer and use the resource name of
     * that customer here.
     *
     * Generated from protobuf field <code>string customer_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Required. The resource name of the reseller's account.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the reseller's account.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Requested page size. Server might return fewer results than requested.
     * If unspecified, returns at most 100 offers.
     * The maximum value is 1000; the server will coerce values above 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Requested page size. Server might return fewer results than requested.
     * If unspecified, returns at most 100 offers.
     * The maximum value is 1000; the server will coerce values above 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A token for a page of results other than the first page.
     * Obtained using
     * [ListTransferableOffersResponse.next_page_token][google.cloud.channel.v1.ListTransferableOffersResponse.next_page_token]
     * of the previous
     * [CloudChannelService.ListTransferableOffers][google.cloud.channel.v1.CloudChannelService.ListTransferableOffers]
     * call.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token for a page of results other than the first page.
     * Obtained using
     * [ListTransferableOffersResponse.next_page_token][google.cloud.channel.v1.ListTransferableOffersResponse.next_page_token]
     * of the previous
     * [CloudChannelService.ListTransferableOffers][google.cloud.channel.v1.CloudChannelService.ListTransferableOffers]
     * call.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Required. The SKU to look up Offers for.
     *
     * Generated from protobuf field <code>string sku = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Required. The SKU to look up Offers for.
     *
     * Generated from protobuf field <code>string sku = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSku($var)
    {
        GPBUtil::checkString($var, True);
        $this->sku = $var;

        return $this;
    }

    /**
     * Optional. The BCP-47 language code. For example, "en-US". The
     * response will localize in the corresponding language code, if specified.
     * The default value is "en-US".
     *
     * Generated from protobuf field <code>string language_code = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The BCP-47 language code. For example, "en-US". The
     * response will localize in the corresponding language code, if specified.
     * The default value is "en-US".
     *
     * Generated from protobuf field <code>string language_code = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Optional. The Billing Account to look up Offers for. Format:
     * accounts/{account_id}/billingAccounts/{billing_account_id}.
     * This field is only relevant for multi-currency accounts. It should be left
     * empty for single currency accounts.
     *
     * Generated from protobuf field <code>string billing_account = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getBillingAccount()
    {
        return $this->billing_account;
    }

    /**
     * Optional. The Billing Account to look up Offers for. Format:
     * accounts/{account_id}/billingAccounts/{billing_account_id}.
     * This field is only relevant for multi-currency accounts. It should be left
     * empty for single currency accounts.
     *
     * Generated from protobuf field <code>string billing_account = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setBillingAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->billing_account = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransferredCustomerIdentity()
    {
        return $this->whichOneof("transferred_customer_identity");
    }

}


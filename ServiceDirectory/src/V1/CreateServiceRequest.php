<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicedirectory/v1/registration_service.proto

namespace Google\Cloud\ServiceDirectory\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [RegistrationService.CreateService][google.cloud.servicedirectory.v1.RegistrationService.CreateService].
 *
 * Generated from protobuf message <code>google.cloud.servicedirectory.v1.CreateServiceRequest</code>
 */
class CreateServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the namespace this service will belong to.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The Resource ID must be 1-63 characters long, and comply with
     * <a href="https://www.ietf.org/rfc/rfc1035.txt" target="_blank">RFC1035</a>.
     * Specifically, the name must be 1-63 characters long and match the regular
     * expression `[a-z](?:[-a-z0-9]{0,61}[a-z0-9])?` which means the first
     * character must be a lowercase letter, and all following characters must
     * be a dash, lowercase letter, or digit, except the last character, which
     * cannot be a dash.
     *
     * Generated from protobuf field <code>string service_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $service_id = '';
    /**
     * Required. A service  with initial fields set.
     *
     * Generated from protobuf field <code>.google.cloud.servicedirectory.v1.Service service = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $service = null;

    /**
     * @param string                                    $parent    Required. The resource name of the namespace this service will belong to. Please see
     *                                                             {@see RegistrationServiceClient::namespaceName()} for help formatting this field.
     * @param \Google\Cloud\ServiceDirectory\V1\Service $service   Required. A service  with initial fields set.
     * @param string                                    $serviceId Required. The Resource ID must be 1-63 characters long, and comply with
     *                                                             <a href="https://www.ietf.org/rfc/rfc1035.txt" target="_blank">RFC1035</a>.
     *                                                             Specifically, the name must be 1-63 characters long and match the regular
     *                                                             expression `[a-z](?:[-a-z0-9]{0,61}[a-z0-9])?` which means the first
     *                                                             character must be a lowercase letter, and all following characters must
     *                                                             be a dash, lowercase letter, or digit, except the last character, which
     *                                                             cannot be a dash.
     *
     * @return \Google\Cloud\ServiceDirectory\V1\CreateServiceRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\ServiceDirectory\V1\Service $service, string $serviceId): self
    {
        return (new self())
            ->setParent($parent)
            ->setService($service)
            ->setServiceId($serviceId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the namespace this service will belong to.
     *     @type string $service_id
     *           Required. The Resource ID must be 1-63 characters long, and comply with
     *           <a href="https://www.ietf.org/rfc/rfc1035.txt" target="_blank">RFC1035</a>.
     *           Specifically, the name must be 1-63 characters long and match the regular
     *           expression `[a-z](?:[-a-z0-9]{0,61}[a-z0-9])?` which means the first
     *           character must be a lowercase letter, and all following characters must
     *           be a dash, lowercase letter, or digit, except the last character, which
     *           cannot be a dash.
     *     @type \Google\Cloud\ServiceDirectory\V1\Service $service
     *           Required. A service  with initial fields set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Servicedirectory\V1\RegistrationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the namespace this service will belong to.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the namespace this service will belong to.
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
     * Required. The Resource ID must be 1-63 characters long, and comply with
     * <a href="https://www.ietf.org/rfc/rfc1035.txt" target="_blank">RFC1035</a>.
     * Specifically, the name must be 1-63 characters long and match the regular
     * expression `[a-z](?:[-a-z0-9]{0,61}[a-z0-9])?` which means the first
     * character must be a lowercase letter, and all following characters must
     * be a dash, lowercase letter, or digit, except the last character, which
     * cannot be a dash.
     *
     * Generated from protobuf field <code>string service_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getServiceId()
    {
        return $this->service_id;
    }

    /**
     * Required. The Resource ID must be 1-63 characters long, and comply with
     * <a href="https://www.ietf.org/rfc/rfc1035.txt" target="_blank">RFC1035</a>.
     * Specifically, the name must be 1-63 characters long and match the regular
     * expression `[a-z](?:[-a-z0-9]{0,61}[a-z0-9])?` which means the first
     * character must be a lowercase letter, and all following characters must
     * be a dash, lowercase letter, or digit, except the last character, which
     * cannot be a dash.
     *
     * Generated from protobuf field <code>string service_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_id = $var;

        return $this;
    }

    /**
     * Required. A service  with initial fields set.
     *
     * Generated from protobuf field <code>.google.cloud.servicedirectory.v1.Service service = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ServiceDirectory\V1\Service|null
     */
    public function getService()
    {
        return $this->service;
    }

    public function hasService()
    {
        return isset($this->service);
    }

    public function clearService()
    {
        unset($this->service);
    }

    /**
     * Required. A service  with initial fields set.
     *
     * Generated from protobuf field <code>.google.cloud.servicedirectory.v1.Service service = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ServiceDirectory\V1\Service $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ServiceDirectory\V1\Service::class);
        $this->service = $var;

        return $this;
    }

}


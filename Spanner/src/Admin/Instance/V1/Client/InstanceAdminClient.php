<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/spanner/admin/instance/v1/spanner_instance_admin.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Spanner\Admin\Instance\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Cloud\Spanner\Admin\Instance\V1\CreateInstanceConfigMetadata;
use Google\Cloud\Spanner\Admin\Instance\V1\CreateInstanceConfigRequest;
use Google\Cloud\Spanner\Admin\Instance\V1\CreateInstanceMetadata;
use Google\Cloud\Spanner\Admin\Instance\V1\CreateInstanceRequest;
use Google\Cloud\Spanner\Admin\Instance\V1\DeleteInstanceConfigRequest;
use Google\Cloud\Spanner\Admin\Instance\V1\DeleteInstanceRequest;
use Google\Cloud\Spanner\Admin\Instance\V1\GetInstanceConfigRequest;
use Google\Cloud\Spanner\Admin\Instance\V1\GetInstanceRequest;
use Google\Cloud\Spanner\Admin\Instance\V1\Instance;
use Google\Cloud\Spanner\Admin\Instance\V1\InstanceConfig;
use Google\Cloud\Spanner\Admin\Instance\V1\ListInstanceConfigOperationsRequest;
use Google\Cloud\Spanner\Admin\Instance\V1\ListInstanceConfigsRequest;
use Google\Cloud\Spanner\Admin\Instance\V1\ListInstancesRequest;
use Google\Cloud\Spanner\Admin\Instance\V1\UpdateInstanceConfigMetadata;
use Google\Cloud\Spanner\Admin\Instance\V1\UpdateInstanceConfigRequest;
use Google\Cloud\Spanner\Admin\Instance\V1\UpdateInstanceMetadata;
use Google\Cloud\Spanner\Admin\Instance\V1\UpdateInstanceRequest;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Cloud Spanner Instance Admin API
 *
 * The Cloud Spanner Instance Admin API can be used to create, delete,
 * modify and list instances. Instances are dedicated Cloud Spanner serving
 * and storage resources to be used by Cloud Spanner databases.
 *
 * Each instance has a "configuration", which dictates where the
 * serving resources for the Cloud Spanner instance are located (e.g.,
 * US-central, Europe). Configurations are created by Google based on
 * resource availability.
 *
 * Cloud Spanner billing is based on the instances that exist and their
 * sizes. After an instance exists, there are no additional
 * per-database or per-operation charges for use of the instance
 * (though there may be additional network bandwidth charges).
 * Instances offer isolation: problems with databases in one instance
 * will not affect other instances. However, within an instance
 * databases can affect each other. For example, if one database in an
 * instance receives a lot of requests and consumes most of the
 * instance resources, fewer resources are available for other
 * databases in that instance, and their performance may suffer.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes. See {@see
 * \Google\Cloud\Spanner\Admin\Instance\V1\InstanceAdminClient} for the stable
 * implementation
 *
 * @experimental
 *
 * @method PromiseInterface createInstanceAsync(CreateInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createInstanceConfigAsync(CreateInstanceConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteInstanceAsync(DeleteInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteInstanceConfigAsync(DeleteInstanceConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getIamPolicyAsync(GetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getInstanceAsync(GetInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getInstanceConfigAsync(GetInstanceConfigRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listInstanceConfigOperationsAsync(ListInstanceConfigOperationsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listInstanceConfigsAsync(ListInstanceConfigsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listInstancesAsync(ListInstancesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface setIamPolicyAsync(SetIamPolicyRequest $request, array $optionalArgs = [])
 * @method PromiseInterface testIamPermissionsAsync(TestIamPermissionsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateInstanceAsync(UpdateInstanceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateInstanceConfigAsync(UpdateInstanceConfigRequest $request, array $optionalArgs = [])
 */
final class InstanceAdminClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.spanner.admin.instance.v1.InstanceAdmin';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'spanner.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/spanner.admin',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/instance_admin_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/instance_admin_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/instance_admin_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/instance_admin_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a instance
     * resource.
     *
     * @param string $project
     * @param string $instance
     *
     * @return string The formatted instance resource.
     */
    public static function instanceName(string $project, string $instance): string
    {
        return self::getPathTemplate('instance')->render([
            'project' => $project,
            'instance' => $instance,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * instance_config resource.
     *
     * @param string $project
     * @param string $instanceConfig
     *
     * @return string The formatted instance_config resource.
     */
    public static function instanceConfigName(string $project, string $instanceConfig): string
    {
        return self::getPathTemplate('instanceConfig')->render([
            'project' => $project,
            'instance_config' => $instanceConfig,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName(string $project): string
    {
        return self::getPathTemplate('project')->render([
            'project' => $project,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - instance: projects/{project}/instances/{instance}
     * - instanceConfig: projects/{project}/instanceConfigs/{instance_config}
     * - project: projects/{project}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'spanner.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates an instance and begins preparing it to begin serving. The
     * returned [long-running operation][google.longrunning.Operation]
     * can be used to track the progress of preparing the new
     * instance. The instance name is assigned by the caller. If the
     * named instance already exists, `CreateInstance` returns
     * `ALREADY_EXISTS`.
     *
     * Immediately upon completion of this request:
     *
     * * The instance is readable via the API, with all requested attributes
     * but no allocated resources. Its state is `CREATING`.
     *
     * Until completion of the returned operation:
     *
     * * Cancelling the operation renders the instance immediately unreadable
     * via the API.
     * * The instance can be deleted.
     * * All other attempts to modify the instance are rejected.
     *
     * Upon completion of the returned operation:
     *
     * * Billing for all successfully-allocated resources begins (some types
     * may have lower than the requested levels).
     * * Databases can be created in the instance.
     * * The instance's allocated resource levels are readable via the API.
     * * The instance's state becomes `READY`.
     *
     * The returned [long-running operation][google.longrunning.Operation] will
     * have a name of the format `<instance_name>/operations/<operation_id>` and
     * can be used to track creation of the instance.  The
     * [metadata][google.longrunning.Operation.metadata] field type is
     * [CreateInstanceMetadata][google.spanner.admin.instance.v1.CreateInstanceMetadata].
     * The [response][google.longrunning.Operation.response] field type is
     * [Instance][google.spanner.admin.instance.v1.Instance], if successful.
     *
     * The async variant is {@see InstanceAdminClient::createInstanceAsync()} .
     *
     * @param CreateInstanceRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createInstance(CreateInstanceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateInstance', $request, $callOptions)->wait();
    }

    /**
     * Creates an instance config and begins preparing it to be used. The
     * returned [long-running operation][google.longrunning.Operation]
     * can be used to track the progress of preparing the new
     * instance config. The instance config name is assigned by the caller. If the
     * named instance config already exists, `CreateInstanceConfig` returns
     * `ALREADY_EXISTS`.
     *
     * Immediately after the request returns:
     *
     * * The instance config is readable via the API, with all requested
     * attributes. The instance config's
     * [reconciling][google.spanner.admin.instance.v1.InstanceConfig.reconciling]
     * field is set to true. Its state is `CREATING`.
     *
     * While the operation is pending:
     *
     * * Cancelling the operation renders the instance config immediately
     * unreadable via the API.
     * * Except for deleting the creating resource, all other attempts to modify
     * the instance config are rejected.
     *
     * Upon completion of the returned operation:
     *
     * * Instances can be created using the instance configuration.
     * * The instance config's
     * [reconciling][google.spanner.admin.instance.v1.InstanceConfig.reconciling]
     * field becomes false. Its state becomes `READY`.
     *
     * The returned [long-running operation][google.longrunning.Operation] will
     * have a name of the format
     * `<instance_config_name>/operations/<operation_id>` and can be used to track
     * creation of the instance config. The
     * [metadata][google.longrunning.Operation.metadata] field type is
     * [CreateInstanceConfigMetadata][google.spanner.admin.instance.v1.CreateInstanceConfigMetadata].
     * The [response][google.longrunning.Operation.response] field type is
     * [InstanceConfig][google.spanner.admin.instance.v1.InstanceConfig], if
     * successful.
     *
     * Authorization requires `spanner.instanceConfigs.create` permission on
     * the resource
     * [parent][google.spanner.admin.instance.v1.CreateInstanceConfigRequest.parent].
     *
     * The async variant is {@see InstanceAdminClient::createInstanceConfigAsync()} .
     *
     * @param CreateInstanceConfigRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createInstanceConfig(CreateInstanceConfigRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('CreateInstanceConfig', $request, $callOptions)->wait();
    }

    /**
     * Deletes an instance.
     *
     * Immediately upon completion of the request:
     *
     * * Billing ceases for all of the instance's reserved resources.
     *
     * Soon afterward:
     *
     * * The instance and *all of its databases* immediately and
     * irrevocably disappear from the API. All data in the databases
     * is permanently deleted.
     *
     * The async variant is {@see InstanceAdminClient::deleteInstanceAsync()} .
     *
     * @param DeleteInstanceRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteInstance(DeleteInstanceRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteInstance', $request, $callOptions)->wait();
    }

    /**
     * Deletes the instance config. Deletion is only allowed when no
     * instances are using the configuration. If any instances are using
     * the config, returns `FAILED_PRECONDITION`.
     *
     * Only user managed configurations can be deleted.
     *
     * Authorization requires `spanner.instanceConfigs.delete` permission on
     * the resource [name][google.spanner.admin.instance.v1.InstanceConfig.name].
     *
     * The async variant is {@see InstanceAdminClient::deleteInstanceConfigAsync()} .
     *
     * @param DeleteInstanceConfigRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteInstanceConfig(DeleteInstanceConfigRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteInstanceConfig', $request, $callOptions)->wait();
    }

    /**
     * Gets the access control policy for an instance resource. Returns an empty
     * policy if an instance exists but does not have a policy set.
     *
     * Authorization requires `spanner.instances.getIamPolicy` on
     * [resource][google.iam.v1.GetIamPolicyRequest.resource].
     *
     * The async variant is {@see InstanceAdminClient::getIamPolicyAsync()} .
     *
     * @param GetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getIamPolicy(GetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('GetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a particular instance.
     *
     * The async variant is {@see InstanceAdminClient::getInstanceAsync()} .
     *
     * @param GetInstanceRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Instance
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getInstance(GetInstanceRequest $request, array $callOptions = []): Instance
    {
        return $this->startApiCall('GetInstance', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a particular instance configuration.
     *
     * The async variant is {@see InstanceAdminClient::getInstanceConfigAsync()} .
     *
     * @param GetInstanceConfigRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return InstanceConfig
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getInstanceConfig(GetInstanceConfigRequest $request, array $callOptions = []): InstanceConfig
    {
        return $this->startApiCall('GetInstanceConfig', $request, $callOptions)->wait();
    }

    /**
     * Lists the user-managed instance config [long-running
     * operations][google.longrunning.Operation] in the given project. An instance
     * config operation has a name of the form
     * `projects/<project>/instanceConfigs/<instance_config>/operations/<operation>`.
     * The long-running operation
     * [metadata][google.longrunning.Operation.metadata] field type
     * `metadata.type_url` describes the type of the metadata. Operations returned
     * include those that have completed/failed/canceled within the last 7 days,
     * and pending operations. Operations returned are ordered by
     * `operation.metadata.value.start_time` in descending order starting
     * from the most recently started operation.
     *
     * The async variant is
     * {@see InstanceAdminClient::listInstanceConfigOperationsAsync()} .
     *
     * @param ListInstanceConfigOperationsRequest $request     A request to house fields associated with the call.
     * @param array                               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listInstanceConfigOperations(ListInstanceConfigOperationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListInstanceConfigOperations', $request, $callOptions);
    }

    /**
     * Lists the supported instance configurations for a given project.
     *
     * The async variant is {@see InstanceAdminClient::listInstanceConfigsAsync()} .
     *
     * @param ListInstanceConfigsRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listInstanceConfigs(ListInstanceConfigsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListInstanceConfigs', $request, $callOptions);
    }

    /**
     * Lists all instances in the given project.
     *
     * The async variant is {@see InstanceAdminClient::listInstancesAsync()} .
     *
     * @param ListInstancesRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listInstances(ListInstancesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListInstances', $request, $callOptions);
    }

    /**
     * Sets the access control policy on an instance resource. Replaces any
     * existing policy.
     *
     * Authorization requires `spanner.instances.setIamPolicy` on
     * [resource][google.iam.v1.SetIamPolicyRequest.resource].
     *
     * The async variant is {@see InstanceAdminClient::setIamPolicyAsync()} .
     *
     * @param SetIamPolicyRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Policy
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function setIamPolicy(SetIamPolicyRequest $request, array $callOptions = []): Policy
    {
        return $this->startApiCall('SetIamPolicy', $request, $callOptions)->wait();
    }

    /**
     * Returns permissions that the caller has on the specified instance resource.
     *
     * Attempting this RPC on a non-existent Cloud Spanner instance resource will
     * result in a NOT_FOUND error if the user has `spanner.instances.list`
     * permission on the containing Google Cloud Project. Otherwise returns an
     * empty set of permissions.
     *
     * The async variant is {@see InstanceAdminClient::testIamPermissionsAsync()} .
     *
     * @param TestIamPermissionsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return TestIamPermissionsResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function testIamPermissions(TestIamPermissionsRequest $request, array $callOptions = []): TestIamPermissionsResponse
    {
        return $this->startApiCall('TestIamPermissions', $request, $callOptions)->wait();
    }

    /**
     * Updates an instance, and begins allocating or releasing resources
     * as requested. The returned [long-running
     * operation][google.longrunning.Operation] can be used to track the
     * progress of updating the instance. If the named instance does not
     * exist, returns `NOT_FOUND`.
     *
     * Immediately upon completion of this request:
     *
     * * For resource types for which a decrease in the instance's allocation
     * has been requested, billing is based on the newly-requested level.
     *
     * Until completion of the returned operation:
     *
     * * Cancelling the operation sets its metadata's
     * [cancel_time][google.spanner.admin.instance.v1.UpdateInstanceMetadata.cancel_time],
     * and begins restoring resources to their pre-request values. The
     * operation is guaranteed to succeed at undoing all resource changes,
     * after which point it terminates with a `CANCELLED` status.
     * * All other attempts to modify the instance are rejected.
     * * Reading the instance via the API continues to give the pre-request
     * resource levels.
     *
     * Upon completion of the returned operation:
     *
     * * Billing begins for all successfully-allocated resources (some types
     * may have lower than the requested levels).
     * * All newly-reserved resources are available for serving the instance's
     * tables.
     * * The instance's new resource levels are readable via the API.
     *
     * The returned [long-running operation][google.longrunning.Operation] will
     * have a name of the format `<instance_name>/operations/<operation_id>` and
     * can be used to track the instance modification.  The
     * [metadata][google.longrunning.Operation.metadata] field type is
     * [UpdateInstanceMetadata][google.spanner.admin.instance.v1.UpdateInstanceMetadata].
     * The [response][google.longrunning.Operation.response] field type is
     * [Instance][google.spanner.admin.instance.v1.Instance], if successful.
     *
     * Authorization requires `spanner.instances.update` permission on
     * the resource [name][google.spanner.admin.instance.v1.Instance.name].
     *
     * The async variant is {@see InstanceAdminClient::updateInstanceAsync()} .
     *
     * @param UpdateInstanceRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateInstance(UpdateInstanceRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateInstance', $request, $callOptions)->wait();
    }

    /**
     * Updates an instance config. The returned
     * [long-running operation][google.longrunning.Operation] can be used to track
     * the progress of updating the instance. If the named instance config does
     * not exist, returns `NOT_FOUND`.
     *
     * Only user managed configurations can be updated.
     *
     * Immediately after the request returns:
     *
     * * The instance config's
     * [reconciling][google.spanner.admin.instance.v1.InstanceConfig.reconciling]
     * field is set to true.
     *
     * While the operation is pending:
     *
     * * Cancelling the operation sets its metadata's
     * [cancel_time][google.spanner.admin.instance.v1.UpdateInstanceConfigMetadata.cancel_time].
     * The operation is guaranteed to succeed at undoing all changes, after
     * which point it terminates with a `CANCELLED` status.
     * * All other attempts to modify the instance config are rejected.
     * * Reading the instance config via the API continues to give the
     * pre-request values.
     *
     * Upon completion of the returned operation:
     *
     * * Creating instances using the instance configuration uses the new
     * values.
     * * The instance config's new values are readable via the API.
     * * The instance config's
     * [reconciling][google.spanner.admin.instance.v1.InstanceConfig.reconciling]
     * field becomes false.
     *
     * The returned [long-running operation][google.longrunning.Operation] will
     * have a name of the format
     * `<instance_config_name>/operations/<operation_id>` and can be used to track
     * the instance config modification.  The
     * [metadata][google.longrunning.Operation.metadata] field type is
     * [UpdateInstanceConfigMetadata][google.spanner.admin.instance.v1.UpdateInstanceConfigMetadata].
     * The [response][google.longrunning.Operation.response] field type is
     * [InstanceConfig][google.spanner.admin.instance.v1.InstanceConfig], if
     * successful.
     *
     * Authorization requires `spanner.instanceConfigs.update` permission on
     * the resource [name][google.spanner.admin.instance.v1.InstanceConfig.name].
     *
     * The async variant is {@see InstanceAdminClient::updateInstanceConfigAsync()} .
     *
     * @param UpdateInstanceConfigRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateInstanceConfig(UpdateInstanceConfigRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('UpdateInstanceConfig', $request, $callOptions)->wait();
    }
}

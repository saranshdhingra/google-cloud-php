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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/rapidmigrationassessment/v1/rapidmigrationassessment.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\RapidMigrationAssessment\V1\Client\BaseClient;

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
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use Google\Cloud\RapidMigrationAssessment\V1\Annotation;
use Google\Cloud\RapidMigrationAssessment\V1\Collector;
use Google\Cloud\RapidMigrationAssessment\V1\CreateAnnotationRequest;
use Google\Cloud\RapidMigrationAssessment\V1\CreateCollectorRequest;
use Google\Cloud\RapidMigrationAssessment\V1\DeleteCollectorRequest;
use Google\Cloud\RapidMigrationAssessment\V1\GetAnnotationRequest;
use Google\Cloud\RapidMigrationAssessment\V1\GetCollectorRequest;
use Google\Cloud\RapidMigrationAssessment\V1\ListCollectorsRequest;
use Google\Cloud\RapidMigrationAssessment\V1\PauseCollectorRequest;
use Google\Cloud\RapidMigrationAssessment\V1\RegisterCollectorRequest;
use Google\Cloud\RapidMigrationAssessment\V1\ResumeCollectorRequest;
use Google\Cloud\RapidMigrationAssessment\V1\UpdateCollectorRequest;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service describing handlers for resources.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes.
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface createAnnotationAsync(CreateAnnotationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createCollectorAsync(CreateCollectorRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteCollectorAsync(DeleteCollectorRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getAnnotationAsync(GetAnnotationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getCollectorAsync(GetCollectorRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listCollectorsAsync(ListCollectorsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface pauseCollectorAsync(PauseCollectorRequest $request, array $optionalArgs = [])
 * @method PromiseInterface registerCollectorAsync(RegisterCollectorRequest $request, array $optionalArgs = [])
 * @method PromiseInterface resumeCollectorAsync(ResumeCollectorRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateCollectorAsync(UpdateCollectorRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
abstract class RapidMigrationAssessmentBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.rapidmigrationassessment.v1.RapidMigrationAssessment';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'rapidmigrationassessment.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ .
                '/../../resources/rapid_migration_assessment_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ .
                '/../../resources/rapid_migration_assessment_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ .
                '/../../resources/rapid_migration_assessment_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../../resources/rapid_migration_assessment_rest_client_config.php',
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
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse(
            $operationName,
            $this->getOperationsClient(),
            $options
        );
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a annotation
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $annotation
     *
     * @return string The formatted annotation resource.
     */
    public static function annotationName(
        string $project,
        string $location,
        string $annotation
    ): string {
        return self::getPathTemplate('annotation')->render([
            'project' => $project,
            'location' => $location,
            'annotation' => $annotation,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a collector
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $collector
     *
     * @return string The formatted collector resource.
     */
    public static function collectorName(
        string $project,
        string $location,
        string $collector
    ): string {
        return self::getPathTemplate('collector')->render([
            'project' => $project,
            'location' => $location,
            'collector' => $collector,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName(
        string $project,
        string $location
    ): string {
        return self::getPathTemplate('location')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - annotation: projects/{project}/locations/{location}/annotations/{annotation}
     * - collector: projects/{project}/locations/{location}/collectors/{collector}
     * - location: projects/{project}/locations/{location}
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
    public static function parseName(
        string $formattedName,
        string $template = null
    ): array {
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
     *           as "<uri>:<port>". Default 'rapidmigrationassessment.googleapis.com:443'.
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
            trigger_error(
                'Call to undefined method ' . __CLASS__ . "::$method()",
                E_USER_ERROR
            );
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates an Annotation
     *
     * The async variant is {@see self::createAnnotationAsync()} .
     *
     * @example samples/V1/RapidMigrationAssessmentClient/create_annotation.php
     *
     * @param CreateAnnotationRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
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
    public function createAnnotation(
        CreateAnnotationRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall(
            'CreateAnnotation',
            $request,
            $callOptions
        )->wait();
    }

    /**
     * Create a Collector to manage the on-prem appliance which collects
     * information about Customer assets.
     *
     * The async variant is {@see self::createCollectorAsync()} .
     *
     * @example samples/V1/RapidMigrationAssessmentClient/create_collector.php
     *
     * @param CreateCollectorRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
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
    public function createCollector(
        CreateCollectorRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall(
            'CreateCollector',
            $request,
            $callOptions
        )->wait();
    }

    /**
     * Deletes a single Collector - changes state of collector to "Deleting".
     * Background jobs does final deletion thorugh producer api.
     *
     * The async variant is {@see self::deleteCollectorAsync()} .
     *
     * @example samples/V1/RapidMigrationAssessmentClient/delete_collector.php
     *
     * @param DeleteCollectorRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
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
    public function deleteCollector(
        DeleteCollectorRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall(
            'DeleteCollector',
            $request,
            $callOptions
        )->wait();
    }

    /**
     * Gets details of a single Annotation.
     *
     * The async variant is {@see self::getAnnotationAsync()} .
     *
     * @example samples/V1/RapidMigrationAssessmentClient/get_annotation.php
     *
     * @param GetAnnotationRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Annotation
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getAnnotation(
        GetAnnotationRequest $request,
        array $callOptions = []
    ): Annotation {
        return $this->startApiCall(
            'GetAnnotation',
            $request,
            $callOptions
        )->wait();
    }

    /**
     * Gets details of a single Collector.
     *
     * The async variant is {@see self::getCollectorAsync()} .
     *
     * @example samples/V1/RapidMigrationAssessmentClient/get_collector.php
     *
     * @param GetCollectorRequest $request     A request to house fields associated with the call.
     * @param array               $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Collector
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getCollector(
        GetCollectorRequest $request,
        array $callOptions = []
    ): Collector {
        return $this->startApiCall(
            'GetCollector',
            $request,
            $callOptions
        )->wait();
    }

    /**
     * Lists Collectors in a given project and location.
     *
     * The async variant is {@see self::listCollectorsAsync()} .
     *
     * @example samples/V1/RapidMigrationAssessmentClient/list_collectors.php
     *
     * @param ListCollectorsRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
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
    public function listCollectors(
        ListCollectorsRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListCollectors', $request, $callOptions);
    }

    /**
     * Pauses the given collector.
     *
     * The async variant is {@see self::pauseCollectorAsync()} .
     *
     * @example samples/V1/RapidMigrationAssessmentClient/pause_collector.php
     *
     * @param PauseCollectorRequest $request     A request to house fields associated with the call.
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
    public function pauseCollector(
        PauseCollectorRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall(
            'PauseCollector',
            $request,
            $callOptions
        )->wait();
    }

    /**
     * Registers the given collector.
     *
     * The async variant is {@see self::registerCollectorAsync()} .
     *
     * @example samples/V1/RapidMigrationAssessmentClient/register_collector.php
     *
     * @param RegisterCollectorRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
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
    public function registerCollector(
        RegisterCollectorRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall(
            'RegisterCollector',
            $request,
            $callOptions
        )->wait();
    }

    /**
     * Resumes the given collector.
     *
     * The async variant is {@see self::resumeCollectorAsync()} .
     *
     * @example samples/V1/RapidMigrationAssessmentClient/resume_collector.php
     *
     * @param ResumeCollectorRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
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
    public function resumeCollector(
        ResumeCollectorRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall(
            'ResumeCollector',
            $request,
            $callOptions
        )->wait();
    }

    /**
     * Updates the parameters of a single Collector.
     *
     * The async variant is {@see self::updateCollectorAsync()} .
     *
     * @example samples/V1/RapidMigrationAssessmentClient/update_collector.php
     *
     * @param UpdateCollectorRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
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
    public function updateCollector(
        UpdateCollectorRequest $request,
        array $callOptions = []
    ): OperationResponse {
        return $this->startApiCall(
            'UpdateCollector',
            $request,
            $callOptions
        )->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see self::getLocationAsync()} .
     *
     * @example samples/V1/RapidMigrationAssessmentClient/get_location.php
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(
        GetLocationRequest $request,
        array $callOptions = []
    ): Location {
        return $this->startApiCall(
            'GetLocation',
            $request,
            $callOptions
        )->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see self::listLocationsAsync()} .
     *
     * @example samples/V1/RapidMigrationAssessmentClient/list_locations.php
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
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
    public function listLocations(
        ListLocationsRequest $request,
        array $callOptions = []
    ): PagedListResponse {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }
}

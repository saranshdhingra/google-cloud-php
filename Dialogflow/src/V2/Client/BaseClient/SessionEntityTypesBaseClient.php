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
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/v2/session_entity_type.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dialogflow\V2\Client\BaseClient;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\V2\CreateSessionEntityTypeRequest;
use Google\Cloud\Dialogflow\V2\DeleteSessionEntityTypeRequest;
use Google\Cloud\Dialogflow\V2\GetSessionEntityTypeRequest;
use Google\Cloud\Dialogflow\V2\ListSessionEntityTypesRequest;
use Google\Cloud\Dialogflow\V2\SessionEntityType;
use Google\Cloud\Dialogflow\V2\UpdateSessionEntityTypeRequest;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for managing
 * [SessionEntityTypes][google.cloud.dialogflow.v2.SessionEntityType].
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
 * \Google\Cloud\Dialogflow\V2\SessionEntityTypesClient} for the stable
 * implementation
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface createSessionEntityTypeAsync(CreateSessionEntityTypeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteSessionEntityTypeAsync(DeleteSessionEntityTypeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getSessionEntityTypeAsync(GetSessionEntityTypeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listSessionEntityTypesAsync(ListSessionEntityTypesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateSessionEntityTypeAsync(UpdateSessionEntityTypeRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
abstract class SessionEntityTypesBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dialogflow.v2.SessionEntityTypes';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'dialogflow.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/dialogflow',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/session_entity_types_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/session_entity_types_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/session_entity_types_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/session_entity_types_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_environment_user_session resource.
     *
     * @param string $project
     * @param string $environment
     * @param string $user
     * @param string $session
     *
     * @return string The formatted project_environment_user_session resource.
     */
    public static function projectEnvironmentUserSessionName(string $project, string $environment, string $user, string $session): string
    {
        return self::getPathTemplate('projectEnvironmentUserSession')->render([
            'project' => $project,
            'environment' => $environment,
            'user' => $user,
            'session' => $session,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_environment_user_session_entity_type resource.
     *
     * @param string $project
     * @param string $environment
     * @param string $user
     * @param string $session
     * @param string $entityType
     *
     * @return string The formatted project_environment_user_session_entity_type resource.
     */
    public static function projectEnvironmentUserSessionEntityTypeName(string $project, string $environment, string $user, string $session, string $entityType): string
    {
        return self::getPathTemplate('projectEnvironmentUserSessionEntityType')->render([
            'project' => $project,
            'environment' => $environment,
            'user' => $user,
            'session' => $session,
            'entity_type' => $entityType,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_environment_user_session resource.
     *
     * @param string $project
     * @param string $location
     * @param string $environment
     * @param string $user
     * @param string $session
     *
     * @return string The formatted project_location_environment_user_session resource.
     */
    public static function projectLocationEnvironmentUserSessionName(string $project, string $location, string $environment, string $user, string $session): string
    {
        return self::getPathTemplate('projectLocationEnvironmentUserSession')->render([
            'project' => $project,
            'location' => $location,
            'environment' => $environment,
            'user' => $user,
            'session' => $session,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_environment_user_session_entity_type resource.
     *
     * @param string $project
     * @param string $location
     * @param string $environment
     * @param string $user
     * @param string $session
     * @param string $entityType
     *
     * @return string The formatted project_location_environment_user_session_entity_type resource.
     */
    public static function projectLocationEnvironmentUserSessionEntityTypeName(string $project, string $location, string $environment, string $user, string $session, string $entityType): string
    {
        return self::getPathTemplate('projectLocationEnvironmentUserSessionEntityType')->render([
            'project' => $project,
            'location' => $location,
            'environment' => $environment,
            'user' => $user,
            'session' => $session,
            'entity_type' => $entityType,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_session resource.
     *
     * @param string $project
     * @param string $location
     * @param string $session
     *
     * @return string The formatted project_location_session resource.
     */
    public static function projectLocationSessionName(string $project, string $location, string $session): string
    {
        return self::getPathTemplate('projectLocationSession')->render([
            'project' => $project,
            'location' => $location,
            'session' => $session,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_session_entity_type resource.
     *
     * @param string $project
     * @param string $location
     * @param string $session
     * @param string $entityType
     *
     * @return string The formatted project_location_session_entity_type resource.
     */
    public static function projectLocationSessionEntityTypeName(string $project, string $location, string $session, string $entityType): string
    {
        return self::getPathTemplate('projectLocationSessionEntityType')->render([
            'project' => $project,
            'location' => $location,
            'session' => $session,
            'entity_type' => $entityType,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_session resource.
     *
     * @param string $project
     * @param string $session
     *
     * @return string The formatted project_session resource.
     */
    public static function projectSessionName(string $project, string $session): string
    {
        return self::getPathTemplate('projectSession')->render([
            'project' => $project,
            'session' => $session,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_session_entity_type resource.
     *
     * @param string $project
     * @param string $session
     * @param string $entityType
     *
     * @return string The formatted project_session_entity_type resource.
     */
    public static function projectSessionEntityTypeName(string $project, string $session, string $entityType): string
    {
        return self::getPathTemplate('projectSessionEntityType')->render([
            'project' => $project,
            'session' => $session,
            'entity_type' => $entityType,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a session
     * resource.
     *
     * @param string $project
     * @param string $session
     *
     * @return string The formatted session resource.
     */
    public static function sessionName(string $project, string $session): string
    {
        return self::getPathTemplate('session')->render([
            'project' => $project,
            'session' => $session,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * session_entity_type resource.
     *
     * @param string $project
     * @param string $session
     * @param string $entityType
     *
     * @return string The formatted session_entity_type resource.
     */
    public static function sessionEntityTypeName(string $project, string $session, string $entityType): string
    {
        return self::getPathTemplate('sessionEntityType')->render([
            'project' => $project,
            'session' => $session,
            'entity_type' => $entityType,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - projectEnvironmentUserSession: projects/{project}/agent/environments/{environment}/users/{user}/sessions/{session}
     * - projectEnvironmentUserSessionEntityType: projects/{project}/agent/environments/{environment}/users/{user}/sessions/{session}/entityTypes/{entity_type}
     * - projectLocationEnvironmentUserSession: projects/{project}/locations/{location}/agent/environments/{environment}/users/{user}/sessions/{session}
     * - projectLocationEnvironmentUserSessionEntityType: projects/{project}/locations/{location}/agent/environments/{environment}/users/{user}/sessions/{session}/entityTypes/{entity_type}
     * - projectLocationSession: projects/{project}/locations/{location}/agent/sessions/{session}
     * - projectLocationSessionEntityType: projects/{project}/locations/{location}/agent/sessions/{session}/entityTypes/{entity_type}
     * - projectSession: projects/{project}/agent/sessions/{session}
     * - projectSessionEntityType: projects/{project}/agent/sessions/{session}/entityTypes/{entity_type}
     * - session: projects/{project}/agent/sessions/{session}
     * - sessionEntityType: projects/{project}/agent/sessions/{session}/entityTypes/{entity_type}
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
     *           as "<uri>:<port>". Default 'dialogflow.googleapis.com:443'.
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
     * Creates a session entity type.
     *
     * If the specified session entity type already exists, overrides the session
     * entity type.
     *
     * This method doesn't work with Google Assistant integration.
     * Contact Dialogflow support if you need to use session entities
     * with Google Assistant integration.
     *
     * The async variant is {@see self::createSessionEntityTypeAsync()} .
     *
     * @param CreateSessionEntityTypeRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SessionEntityType
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createSessionEntityType(CreateSessionEntityTypeRequest $request, array $callOptions = []): SessionEntityType
    {
        return $this->startApiCall('CreateSessionEntityType', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified session entity type.
     *
     * This method doesn't work with Google Assistant integration.
     * Contact Dialogflow support if you need to use session entities
     * with Google Assistant integration.
     *
     * The async variant is {@see self::deleteSessionEntityTypeAsync()} .
     *
     * @param DeleteSessionEntityTypeRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
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
    public function deleteSessionEntityType(DeleteSessionEntityTypeRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteSessionEntityType', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the specified session entity type.
     *
     * This method doesn't work with Google Assistant integration.
     * Contact Dialogflow support if you need to use session entities
     * with Google Assistant integration.
     *
     * The async variant is {@see self::getSessionEntityTypeAsync()} .
     *
     * @param GetSessionEntityTypeRequest $request     A request to house fields associated with the call.
     * @param array                       $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SessionEntityType
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getSessionEntityType(GetSessionEntityTypeRequest $request, array $callOptions = []): SessionEntityType
    {
        return $this->startApiCall('GetSessionEntityType', $request, $callOptions)->wait();
    }

    /**
     * Returns the list of all session entity types in the specified session.
     *
     * This method doesn't work with Google Assistant integration.
     * Contact Dialogflow support if you need to use session entities
     * with Google Assistant integration.
     *
     * The async variant is {@see self::listSessionEntityTypesAsync()} .
     *
     * @param ListSessionEntityTypesRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
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
    public function listSessionEntityTypes(ListSessionEntityTypesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListSessionEntityTypes', $request, $callOptions);
    }

    /**
     * Updates the specified session entity type.
     *
     * This method doesn't work with Google Assistant integration.
     * Contact Dialogflow support if you need to use session entities
     * with Google Assistant integration.
     *
     * The async variant is {@see self::updateSessionEntityTypeAsync()} .
     *
     * @param UpdateSessionEntityTypeRequest $request     A request to house fields associated with the call.
     * @param array                          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return SessionEntityType
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateSessionEntityType(UpdateSessionEntityTypeRequest $request, array $callOptions = []): SessionEntityType
    {
        return $this->startApiCall('UpdateSessionEntityType', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see self::getLocationAsync()} .
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
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see self::listLocationsAsync()} .
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
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }
}

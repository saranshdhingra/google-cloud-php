<?php
/*
 * Copyright 2022 Google LLC
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
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START dataplex_v1_generated_DataplexService_DeleteZone_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Dataplex\V1\Client\DataplexServiceClient;
use Google\Cloud\Dataplex\V1\DeleteZoneRequest;
use Google\Rpc\Status;

/**
 * Deletes a zone resource. All assets within a zone must be deleted before
 * the zone can be deleted.
 *
 * @param string $formattedName The resource name of the zone:
 *                              `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/zones/{zone_id}`. Please see
 *                              {@see DataplexServiceClient::zoneName()} for help formatting this field.
 */
function delete_zone_sample(string $formattedName): void
{
    // Create a client.
    $dataplexServiceClient = new DataplexServiceClient();

    // Prepare the request message.
    $request = (new DeleteZoneRequest())
        ->setName($formattedName);

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $dataplexServiceClient->deleteZone($request);
        $response->pollUntilComplete();

        if ($response->operationSucceeded()) {
            printf('Operation completed successfully.' . PHP_EOL);
        } else {
            /** @var Status $error */
            $error = $response->getError();
            printf('Operation failed with error data: %s' . PHP_EOL, $error->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedName = DataplexServiceClient::zoneName('[PROJECT]', '[LOCATION]', '[LAKE]', '[ZONE]');

    delete_zone_sample($formattedName);
}
// [END dataplex_v1_generated_DataplexService_DeleteZone_sync]

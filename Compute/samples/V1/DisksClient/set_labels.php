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

// [START compute_v1_generated_Disks_SetLabels_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\OperationResponse;
use Google\Cloud\Compute\V1\DisksClient;
use Google\Cloud\Compute\V1\ZoneSetLabelsRequest;
use Google\Rpc\Status;

/**
 * Sets the labels on a disk. To learn more about labels, read the Labeling Resources documentation.
 *
 * @param string $project  Project ID for this request.
 * @param string $resource Name or id of the resource for this request.
 * @param string $zone     The name of the zone for this request.
 */
function set_labels_sample(string $project, string $resource, string $zone): void
{
    // Create a client.
    $disksClient = new DisksClient();

    // Prepare any non-scalar elements to be passed along with the request.
    $zoneSetLabelsRequestResource = new ZoneSetLabelsRequest();

    // Call the API and handle any network failures.
    try {
        /** @var OperationResponse $response */
        $response = $disksClient->setLabels($project, $resource, $zone, $zoneSetLabelsRequestResource);
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
    $project = '[PROJECT]';
    $resource = '[RESOURCE]';
    $zone = '[ZONE]';

    set_labels_sample($project, $resource, $zone);
}
// [END compute_v1_generated_Disks_SetLabels_sync]

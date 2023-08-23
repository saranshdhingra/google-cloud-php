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

// [START batch_v1_generated_BatchService_CreateJob_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Batch\V1\Client\BatchServiceClient;
use Google\Cloud\Batch\V1\CreateJobRequest;
use Google\Cloud\Batch\V1\Job;
use Google\Cloud\Batch\V1\TaskGroup;
use Google\Cloud\Batch\V1\TaskSpec;

/**
 * Create a Job.
 *
 * @param string $formattedParent The parent resource name where the Job will be created.
 *                                Pattern: "projects/{project}/locations/{location}"
 *                                Please see {@see BatchServiceClient::locationName()} for help formatting this field.
 */
function create_job_sample(string $formattedParent): void
{
    // Create a client.
    $batchServiceClient = new BatchServiceClient();

    // Prepare the request message.
    $jobTaskGroupsTaskSpec = new TaskSpec();
    $taskGroup = (new TaskGroup())
        ->setTaskSpec($jobTaskGroupsTaskSpec);
    $jobTaskGroups = [$taskGroup,];
    $job = (new Job())
        ->setTaskGroups($jobTaskGroups);
    $request = (new CreateJobRequest())
        ->setParent($formattedParent)
        ->setJob($job);

    // Call the API and handle any network failures.
    try {
        /** @var Job $response */
        $response = $batchServiceClient->createJob($request);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
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
    $formattedParent = BatchServiceClient::locationName('[PROJECT]', '[LOCATION]');

    create_job_sample($formattedParent);
}
// [END batch_v1_generated_BatchService_CreateJob_sync]

<?php
/*
 * Copyright 2020 Google LLC
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
 * https://github.com/googleapis/googleapis/blob/master/google/monitoring/v3/service_service.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Monitoring\V3;

use Google\Cloud\Monitoring\V3\Gapic\ServiceMonitoringServiceGapicClient;
use Google\ApiCore\PathTemplate;

/** {@inheritdoc} */
class ServiceMonitoringServiceClient extends ServiceMonitoringServiceGapicClient
{
    /**
     * Formats a string containing the fully-qualified path to represent
     * a project resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     * @deprecated
     */
    public static function projectName($project)
    {
        return (new PathTemplate('projects/{project}'))->render([
            'project' => $project,
        ]);
    }
}

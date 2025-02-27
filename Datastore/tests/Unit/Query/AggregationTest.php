<?php
/**
 * Copyright 2023 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Datastore\Tests\Unit\Query;

use Google\Cloud\Datastore\Query\Aggregation;
use PHPUnit\Framework\TestCase;

/**
 * @group datastore
 */
class AggregationTest extends TestCase
{
    public function testCountType()
    {
        $expectedQuery = [
            'count' => []
        ];

        $aggregation = Aggregation::count();

        $this->assertEquals($expectedQuery, $aggregation->getProps());
    }

    public function testAlias()
    {
        $alias = uniqid();
        $expectedQuery = [
            'count' => [],
            'alias' => $alias
        ];

        $aggregation = Aggregation::count()->alias($alias);

        $this->assertEquals($expectedQuery, $aggregation->getProps());
    }
}

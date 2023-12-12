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

namespace Google\Cloud\Core\Tests\Unit\Helpers;

/**
 * This class is only intended to be used in tests to either mock
 * or execute some code in a predicted manner.
 */
class SampleGapicClass2
{
    public function sampleMethod(&$counter, $args)
    {
        $counter++;
    }

    public function sampleMethod2($arg1, $arg2, $optionalArgs = [])
    {
    }
}

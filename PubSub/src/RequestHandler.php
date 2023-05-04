<?php
/**
 * Copyright 2023 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\PubSub;

use Google\ApiCore\Serializer;
use Google\Cloud\Core\Duration as CoreDuration;
use Google\Cloud\Core\EmulatorTrait;
use Google\Cloud\Core\GrpcRequestWrapper;
use Google\Cloud\Core\GrpcTrait;
use Google\Cloud\PubSub\PubSubClient;

class RequestHandler
{
    use EmulatorTrait;
    use GrpcTrait;

    const BASE_URI = 'https://pubsub.googleapis.com/';

    /**
     * @var array
     */
    private $clientConfig;

    /**
     * @var array
     */
    private $gapics;

    /**
     * @param array $config
     */
    public function __construct(
        array $config = [],
        Serializer $serializer,
        array $gapicClasses = []
    ) {
        //@codeCoverageIgnoreStart

        $config['serializer'] = $serializer;
        // TODO: We should be able to swap out the use of
        // GrpcRequestWrapper with either something in gax, or
        // have the functionality in this file itself.
        $this->setRequestWrapper(new GrpcRequestWrapper($config));
        $grpcConfig = $this->getGaxConfig(
            PubSubClient::VERSION,
            isset($config['authHttpHandler'])
                ? $config['authHttpHandler']
                : null
        );

        $config += ['emulatorHost' => null];

        if (isset($config['apiEndpoint'])) {
            $grpcConfig['apiEndpoint'] = $config['apiEndpoint'];
        }

        if ((bool) $config['emulatorHost']) {
            $grpcConfig = array_merge(
                $grpcConfig,
                $this->emulatorGapicConfig($config['emulatorHost'])
            );
        }
        //@codeCoverageIgnoreEnd

        $this->clientConfig = $grpcConfig;

        // initialize the gapics
        foreach($gapicClasses as $gapicClass) {
            $this->gapics[] = new $gapicClass($this->clientConfig);
        }
    }

    /**
     * Helper function that forwards the request to a gapic client obj.
     * 
     * @param $gapicClass The object of this GAPIC client will be used.
     * @param $method This method needs to be called on the gapic obj.
     * @param $requiredArgs The positional arguments to be passed on the $method
     * @param $args The optional args.
     * 
     * TODO: Probably we can have the $gapicClass as the last param which is null
     * only in cases where the resource only interacts with only one GAPIC
     * and therefore, only one GAPIC was passed in the constructor
     */
    public function sendReq(
        $gapicClass,
        string $method,
        array $requiredArgs,
        array $args) {

        $allArgs = $requiredArgs;

        // we send the optional args in the end, because everything before that is
        // passed on the the `$method` as a positional argument
        // TODO: If we merge the GrpcRequestWrapper funcationality here,
        // we can modify this behaviour
        $allArgs[] = $args;

        // fetch the gapic obj to use while sending the req.
        $obj = $this->getGapicObj($gapicClass);

        return $this->send([$obj, $method], $allArgs);
    }

    private function transformDuration($v)
    {
        if (is_string($v)) {
            $d = explode('.', trim($v, 's'));
            if (count($d) < 2) {
                $seconds = $d[0];
                $nanos = 0;
            } else {
                $seconds = (int) $d[0];
                $nanos = $this->convertFractionToNanoSeconds($d[1]);
            }
        } elseif ($v instanceof CoreDuration) {
            $d = $v->get();
            $seconds = $d['seconds'];
            $nanos = $d['nanos'];
        }

        return [
            'seconds' => $seconds,
            'nanos' => $nanos
        ];
    }

    /**
     * Fetches the GAPIC class object that has been previously instantiated
     * given the GAPIC class.
     * 
     * TODO: Check if we can store the same in a map and access that using the class name.
     * That way we won't need this func.
     */
    private function getGapicObj($cls) {
        foreach($this->gapics as $gapicObj) {
            if($gapicObj instanceof $cls){
                return $gapicObj;
            }
        }

        return false;
    }
}

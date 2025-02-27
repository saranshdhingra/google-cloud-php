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
 * This file was automatically generated - do not edit!
 */

namespace Google\Cloud\DiscoveryEngine\Tests\Unit\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Cloud\DiscoveryEngine\V1\Client\CompletionServiceClient;
use Google\Cloud\DiscoveryEngine\V1\CompleteQueryRequest;
use Google\Cloud\DiscoveryEngine\V1\CompleteQueryResponse;
use Google\Rpc\Code;
use stdClass;

/**
 * @group discoveryengine
 *
 * @group gapic
 */
class CompletionServiceClientTest extends GeneratedTest
{
    /** @return TransportInterface */
    private function createTransport($deserialize = null)
    {
        return new MockTransport($deserialize);
    }

    /** @return CredentialsWrapper */
    private function createCredentials()
    {
        return $this->getMockBuilder(CredentialsWrapper::class)->disableOriginalConstructor()->getMock();
    }

    /** @return CompletionServiceClient */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];
        return new CompletionServiceClient($options);
    }

    /** @test */
    public function completeQueryTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $tailMatchTriggered = true;
        $expectedResponse = new CompleteQueryResponse();
        $expectedResponse->setTailMatchTriggered($tailMatchTriggered);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedDataStore = $gapicClient->dataStoreName('[PROJECT]', '[LOCATION]', '[DATA_STORE]');
        $query = 'query107944136';
        $request = (new CompleteQueryRequest())
            ->setDataStore($formattedDataStore)
            ->setQuery($query);
        $response = $gapicClient->completeQuery($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.discoveryengine.v1.CompletionService/CompleteQuery', $actualFuncCall);
        $actualValue = $actualRequestObject->getDataStore();
        $this->assertProtobufEquals($formattedDataStore, $actualValue);
        $actualValue = $actualRequestObject->getQuery();
        $this->assertProtobufEquals($query, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function completeQueryExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage  = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->addResponse(null, $status);
        // Mock request
        $formattedDataStore = $gapicClient->dataStoreName('[PROJECT]', '[LOCATION]', '[DATA_STORE]');
        $query = 'query107944136';
        $request = (new CompleteQueryRequest())
            ->setDataStore($formattedDataStore)
            ->setQuery($query);
        try {
            $gapicClient->completeQuery($request);
            // If the $gapicClient method call did not throw, fail the test
            $this->fail('Expected an ApiException, but no exception was thrown.');
        } catch (ApiException $ex) {
            $this->assertEquals($status->code, $ex->getCode());
            $this->assertEquals($expectedExceptionMessage, $ex->getMessage());
        }
        // Call popReceivedCalls to ensure the stub is exhausted
        $transport->popReceivedCalls();
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function completeQueryAsyncTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $tailMatchTriggered = true;
        $expectedResponse = new CompleteQueryResponse();
        $expectedResponse->setTailMatchTriggered($tailMatchTriggered);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedDataStore = $gapicClient->dataStoreName('[PROJECT]', '[LOCATION]', '[DATA_STORE]');
        $query = 'query107944136';
        $request = (new CompleteQueryRequest())
            ->setDataStore($formattedDataStore)
            ->setQuery($query);
        $response = $gapicClient->completeQueryAsync($request)->wait();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.discoveryengine.v1.CompletionService/CompleteQuery', $actualFuncCall);
        $actualValue = $actualRequestObject->getDataStore();
        $this->assertProtobufEquals($formattedDataStore, $actualValue);
        $actualValue = $actualRequestObject->getQuery();
        $this->assertProtobufEquals($query, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }
}

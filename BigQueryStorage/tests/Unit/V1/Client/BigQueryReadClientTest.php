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

namespace Google\Cloud\BigQuery\Storage\Tests\Unit\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\ServerStream;
use Google\ApiCore\Testing\GeneratedTest;
use Google\ApiCore\Testing\MockTransport;
use Google\Cloud\BigQuery\Storage\V1\Client\BigQueryReadClient;
use Google\Cloud\BigQuery\Storage\V1\CreateReadSessionRequest;
use Google\Cloud\BigQuery\Storage\V1\ReadRowsRequest;
use Google\Cloud\BigQuery\Storage\V1\ReadRowsResponse;
use Google\Cloud\BigQuery\Storage\V1\ReadSession;
use Google\Cloud\BigQuery\Storage\V1\SplitReadStreamRequest;
use Google\Cloud\BigQuery\Storage\V1\SplitReadStreamResponse;
use Google\Rpc\Code;
use stdClass;

/**
 * @group storage
 *
 * @group gapic
 */
class BigQueryReadClientTest extends GeneratedTest
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

    /** @return BigQueryReadClient */
    private function createClient(array $options = [])
    {
        $options += [
            'credentials' => $this->createCredentials(),
        ];
        return new BigQueryReadClient($options);
    }

    /** @test */
    public function createReadSessionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $table = 'table110115790';
        $estimatedTotalBytesScanned = 452788190;
        $estimatedTotalPhysicalFileSize = 938325754;
        $estimatedRowCount = 1745583577;
        $traceId = 'traceId1270300245';
        $expectedResponse = new ReadSession();
        $expectedResponse->setName($name);
        $expectedResponse->setTable($table);
        $expectedResponse->setEstimatedTotalBytesScanned($estimatedTotalBytesScanned);
        $expectedResponse->setEstimatedTotalPhysicalFileSize($estimatedTotalPhysicalFileSize);
        $expectedResponse->setEstimatedRowCount($estimatedRowCount);
        $expectedResponse->setTraceId($traceId);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->projectName('[PROJECT]');
        $readSession = new ReadSession();
        $request = (new CreateReadSessionRequest())
            ->setParent($formattedParent)
            ->setReadSession($readSession);
        $response = $gapicClient->createReadSession($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.bigquery.storage.v1.BigQueryRead/CreateReadSession', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getReadSession();
        $this->assertProtobufEquals($readSession, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function createReadSessionExceptionTest()
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
        $formattedParent = $gapicClient->projectName('[PROJECT]');
        $readSession = new ReadSession();
        $request = (new CreateReadSessionRequest())
            ->setParent($formattedParent)
            ->setReadSession($readSession);
        try {
            $gapicClient->createReadSession($request);
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
    public function readRowsTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $rowCount = 1340416618;
        $expectedResponse = new ReadRowsResponse();
        $expectedResponse->setRowCount($rowCount);
        $transport->addResponse($expectedResponse);
        $rowCount2 = 349815907;
        $expectedResponse2 = new ReadRowsResponse();
        $expectedResponse2->setRowCount($rowCount2);
        $transport->addResponse($expectedResponse2);
        $rowCount3 = 349815906;
        $expectedResponse3 = new ReadRowsResponse();
        $expectedResponse3->setRowCount($rowCount3);
        $transport->addResponse($expectedResponse3);
        // Mock request
        $formattedReadStream = $gapicClient->readStreamName('[PROJECT]', '[LOCATION]', '[SESSION]', '[STREAM]');
        $request = (new ReadRowsRequest())
            ->setReadStream($formattedReadStream);
        $serverStream = $gapicClient->readRows($request);
        $this->assertInstanceOf(ServerStream::class, $serverStream);
        $responses = iterator_to_array($serverStream->readAll());
        $expectedResponses = [];
        $expectedResponses[] = $expectedResponse;
        $expectedResponses[] = $expectedResponse2;
        $expectedResponses[] = $expectedResponse3;
        $this->assertEquals($expectedResponses, $responses);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.bigquery.storage.v1.BigQueryRead/ReadRows', $actualFuncCall);
        $actualValue = $actualRequestObject->getReadStream();
        $this->assertProtobufEquals($formattedReadStream, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function readRowsExceptionTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $status = new stdClass();
        $status->code = Code::DATA_LOSS;
        $status->details = 'internal error';
        $expectedExceptionMessage = json_encode([
            'message' => 'internal error',
            'code' => Code::DATA_LOSS,
            'status' => 'DATA_LOSS',
            'details' => [],
        ], JSON_PRETTY_PRINT);
        $transport->setStreamingStatus($status);
        $this->assertTrue($transport->isExhausted());
        // Mock request
        $formattedReadStream = $gapicClient->readStreamName('[PROJECT]', '[LOCATION]', '[SESSION]', '[STREAM]');
        $request = (new ReadRowsRequest())
            ->setReadStream($formattedReadStream);
        $serverStream = $gapicClient->readRows($request);
        $results = $serverStream->readAll();
        try {
            iterator_to_array($results);
            // If the close stream method call did not throw, fail the test
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
    public function splitReadStreamTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $expectedResponse = new SplitReadStreamResponse();
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedName = $gapicClient->readStreamName('[PROJECT]', '[LOCATION]', '[SESSION]', '[STREAM]');
        $request = (new SplitReadStreamRequest())
            ->setName($formattedName);
        $response = $gapicClient->splitReadStream($request);
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.bigquery.storage.v1.BigQueryRead/SplitReadStream', $actualFuncCall);
        $actualValue = $actualRequestObject->getName();
        $this->assertProtobufEquals($formattedName, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }

    /** @test */
    public function splitReadStreamExceptionTest()
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
        $formattedName = $gapicClient->readStreamName('[PROJECT]', '[LOCATION]', '[SESSION]', '[STREAM]');
        $request = (new SplitReadStreamRequest())
            ->setName($formattedName);
        try {
            $gapicClient->splitReadStream($request);
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
    public function createReadSessionAsyncTest()
    {
        $transport = $this->createTransport();
        $gapicClient = $this->createClient([
            'transport' => $transport,
        ]);
        $this->assertTrue($transport->isExhausted());
        // Mock response
        $name = 'name3373707';
        $table = 'table110115790';
        $estimatedTotalBytesScanned = 452788190;
        $estimatedTotalPhysicalFileSize = 938325754;
        $estimatedRowCount = 1745583577;
        $traceId = 'traceId1270300245';
        $expectedResponse = new ReadSession();
        $expectedResponse->setName($name);
        $expectedResponse->setTable($table);
        $expectedResponse->setEstimatedTotalBytesScanned($estimatedTotalBytesScanned);
        $expectedResponse->setEstimatedTotalPhysicalFileSize($estimatedTotalPhysicalFileSize);
        $expectedResponse->setEstimatedRowCount($estimatedRowCount);
        $expectedResponse->setTraceId($traceId);
        $transport->addResponse($expectedResponse);
        // Mock request
        $formattedParent = $gapicClient->projectName('[PROJECT]');
        $readSession = new ReadSession();
        $request = (new CreateReadSessionRequest())
            ->setParent($formattedParent)
            ->setReadSession($readSession);
        $response = $gapicClient->createReadSessionAsync($request)->wait();
        $this->assertEquals($expectedResponse, $response);
        $actualRequests = $transport->popReceivedCalls();
        $this->assertSame(1, count($actualRequests));
        $actualFuncCall = $actualRequests[0]->getFuncCall();
        $actualRequestObject = $actualRequests[0]->getRequestObject();
        $this->assertSame('/google.cloud.bigquery.storage.v1.BigQueryRead/CreateReadSession', $actualFuncCall);
        $actualValue = $actualRequestObject->getParent();
        $this->assertProtobufEquals($formattedParent, $actualValue);
        $actualValue = $actualRequestObject->getReadSession();
        $this->assertProtobufEquals($readSession, $actualValue);
        $this->assertTrue($transport->isExhausted());
    }
}

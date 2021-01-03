<?php

use Core\maker\http\Request;
use CoreTest\mocks\routes\protocols\RouteMock;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use PHPUnit\Framework\TestCase;

class TestTraitBody extends TestCase
{
    public function testShouldAddBodyInRequest()
    {
        // ARRANGE
        $toJSON = array(
            'testFiledOne' => 'testValuOne',
            'testFiledTwo' => 'testValueTwo'
        );

        $jsonBody = json_encode($toJSON, true);

        $mock = new MockHandler([
            new GuzzleResponse(200, ['X-Foo' => 'Bar'], $jsonBody),
            new GuzzleResponse(202, ['Content-Length' => 0]),
        ]);

        $handlerStack = HandlerStack::create($mock);

        $client = new Client(['handler' => $handlerStack]);

        $response = $client->request('POST', '/');

        $routeMock = new RouteMock();
        $routes = $routeMock->loadRoutes();
        // ACT

        $request = new Request();
        $request->createRequest();

        // ARRANGE
        $bodyResponse = $response->getBody();


        $this->assertEquals($jsonBody, $bodyResponse);
    }
}

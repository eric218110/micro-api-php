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
    protected function fakeBody()
    {
        return json_encode(array(
            'testFiledOne' => 'testValuOne',
            'testFiledTwo' => 'testValueTwo'
        ), true);
    }

    protected function makeClientHttp()
    {
        $mock = new MockHandler([
            new GuzzleResponse(200, ['X-Foo' => 'Bar'], $this->fakeBody()),
            new GuzzleResponse(202, ['Content-Length' => 0]),
        ]);

        $handlerStack = HandlerStack::create($mock);

        return new Client(['handler' => $handlerStack]);
    }

    public function testShouldAddBodyInRequest()
    {
        // ARRANGE
        $client = $this->makeClientHttp();
        $response = $client->request('POST', '/');

        // ACT
        $request = new Request();
        $request->createRequest();

        // ARRANGE
        $bodyResponse = $response->getBody();
        $this->assertEquals($this->fakeBody(), $bodyResponse);
    }
}

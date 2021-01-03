<?php

namespace CoreTest\maker\http\fakes;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response as GuzzleResponse;

class FakeClientHTTP
{
    public static function loadClientHTTP()
    {
        $mock = new MockHandler([
            new GuzzleResponse(200, ['X-Foo' => 'Bar'], FakeBodyRequest::loadBody()),
            new GuzzleResponse(202, ['Content-Length' => 0]),
        ]);

        $handlerStack = HandlerStack::create($mock);

        return new Client(['handler' => $handlerStack]);
    }
}

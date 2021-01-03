<?php

use Core\maker\http\Request;
use CoreTest\fakes\http\mocks\FakeBodyRequest;
use CoreTest\fakes\http\mocks\FakeClientHTTP;
use PHPUnit\Framework\TestCase;

class TestTraitBody extends TestCase
{
    public function testShouldAddBodyInRequest()
    {
        // ARRANGE
        $client = FakeClientHTTP::loadClientHTTP();
        $response = $client->request('POST', '/');

        // ACT
        $request = new Request();
        $request->createRequest();

        // ARRANGE
        $bodyResponse = $response->getBody();
        $this->assertEquals(FakeBodyRequest::loadBody(), $bodyResponse);
    }
}

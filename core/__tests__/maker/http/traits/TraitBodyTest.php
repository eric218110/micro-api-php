<?php

use Core\maker\http\Request;
use CoreTest\maker\http\fakes\FakeClientHTTP;
use CoreTest\maker\http\fakes\FakeBodyRequest;
use PHPUnit\Framework\TestCase;

class TraitBodyTest extends TestCase
{
    public function testShouldAddBodyInRequest()
    {
        // ARRANGE
        $client = FakeClientHTTP::loadClientHTTP();
        $response = $client->request('POST', '/');

        // ACT
        $request = new Request();
        $request->createRequest('fakeParams');

        // ARRANGE
        $bodyResponse = $response->getBody();
        $this->assertEquals(FakeBodyRequest::loadBody(), $bodyResponse);
    }
}

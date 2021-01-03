<?php

use Core\maker\http\Request;
use CoreTest\maker\http\fakes\FakeClientHTTP;
use PHPUnit\Framework\TestCase;

class TraitClientIpTest extends TestCase
{
    public function testShouldTraitClientIPReturnIPIfNoInformed()
    {

        // ARRANGE
        $client = FakeClientHTTP::loadClientHTTP();
        $client->request('GET', '/');
        $noIpAddress = '0.0.0.0';
        $request = new Request();
        $request->createRequest();

        // ACT
        $ipAddress = $request->loadClientIP();

        // ASSERT
        $this->assertEquals($noIpAddress, $ipAddress);
    }
}

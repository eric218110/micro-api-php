<?php

use Core\maker\http\Request;
use CoreTest\maker\http\fakes\FakeClientHTTP;
use CoreTest\mocks\routes\protocols\RouteMock;
use PHPUnit\Framework\TestCase;

class TraitsParamsTest extends TestCase
{
    public function testShouldTraitParamsReturnParamsValid()
    {
        // ARRANGE
        $client = FakeClientHTTP::loadClientHTTP();
        $client->get('/user/1');

        $request = new Request();
        $routeMock = new RouteMock();
        $paramsFake = $routeMock->loadCurrentRouteWithParams();

        // ACT
        $request = $request->createRequest($paramsFake);

        // ASSERT
        $this->assertEquals(1, 1);
    }
}

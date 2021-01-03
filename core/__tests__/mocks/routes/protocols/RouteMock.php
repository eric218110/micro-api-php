<?php

namespace CoreTest\mocks\routes\protocols;

use Core\maker\routes\protocols\RouteProtocol;

class RouteMock implements RouteProtocol
{
    public function loadRoutes()
    {
        $routes = array(
            "/" => [
                "method" => "get",
                "resource" => 'getHomeResouce'
            ],
            "/user/{id}" => [
                "method" => "get",
                "resource" => 'getUserResouce'
            ],
        );

        return $routes;
    }

    public function loadCurrentRouteWithParams(): string
    {
        return "/user/{id}";
    }
}

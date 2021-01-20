<?php


namespace Core\data\routes\match;

use Core\domain\protocols\http\method\LoadHTTPMethod;
use Core\domain\routes\match\RouteMatchWithHTTPMethod;

class MatchRouteWithHTTPMethod implements RouteMatchWithHTTPMethod
{
    private $loadHTTPMethod;

    public function __construct(LoadHTTPMethod $loadHTTPMethod)
    {
        $this->loadHTTPMethod = $loadHTTPMethod;
    }

    public function matchRouteWithHTTPMethod(string $routeMethod): bool
    {
        return $this->loadHTTPMethod->loadHttpMethod() === $routeMethod;
    }
}
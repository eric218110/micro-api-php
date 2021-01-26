<?php


namespace Core\data\routes\validate\match;


use Core\domain\routes\match\RouteMatchWithHTTPMethod;
use Core\domain\routes\match\RouteMatchWithURI;
use Core\domain\routes\validate\match\ValidateMatchRoute;

class ValidateRouterMatch implements ValidateMatchRoute
{
    private $routeMatchWithURI;
    private $routeMatchWithHTTPMethod;

    public function __construct(RouteMatchWithURI $routeMatchWithURI, RouteMatchWithHTTPMethod $routeMatchWithHTTPMethod)
    {
        $this->routeMatchWithURI = $routeMatchWithURI;
        $this->routeMatchWithHTTPMethod = $routeMatchWithHTTPMethod;
    }

    public function validateRouteMatch(string $pathRoute, string $httpMethod): bool
    {
        if ($this->routeMatchWithURI->matchRouteWithURI($pathRoute)) {
            if ($this->routeMatchWithHTTPMethod->matchRouteWithHTTPMethod($httpMethod)) {
                return true;
            }
        }
        return false;
    }
}
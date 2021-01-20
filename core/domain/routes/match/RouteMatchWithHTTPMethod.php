<?php


namespace Core\domain\routes\match;


interface RouteMatchWithHTTPMethod
{
    public function matchRouteWithHTTPMethod(string $routeMethod): bool;
}
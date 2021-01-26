<?php


namespace Core\domain\routes\validate\match;


interface ValidateMatchRoute
{
    public function validateRouteMatch(string $pathRoute, string $httpMethod): bool;
}
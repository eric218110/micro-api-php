<?php


namespace Core\domain\routes\match;


interface RouteMatchWithURI
{
    public function matchRouteWithURI(string $path): bool;
}
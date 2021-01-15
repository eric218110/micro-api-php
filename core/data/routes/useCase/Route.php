<?php


namespace Core\data\routes\useCase;

use Core\domain\routes\load\LoadPathRoute;
use Core\domain\routes\protocols\Route as RouteProtocols;

class Route implements RouteProtocols, LoadPathRoute
{
    private $routes = array();

    const INDEX_PATH = 'path';
    const INDEX_CALLBACK_FUNCTION = 'callbackFunction';
    const INDEX_ARGUMENTS = 'args';

    public function createRouter(string $path, callable $callbackFunction, array $args = []): void
    {
        $route = [
            self::INDEX_PATH => $path,
            self::INDEX_CALLBACK_FUNCTION => $callbackFunction,
            self::INDEX_ARGUMENTS => $args
        ];

        $this->routes[] = $route;

        var_dump($this->loadRoutes());

    }

    public function loadRoutes(): array
    {
        return $this->routes;
    }

    public function loadPathRoute(): array
    {
        return [];
    }
}
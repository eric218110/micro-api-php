<?php


namespace Core\data\routes\useCase;


use Core\domain\protocols\http\request\create\CreateRequest;
use Core\domain\routes\protocols\Route as RouteProtocols;

class Route implements RouteProtocols
{
    private $routes = array();
    private $createRequest;

    const INDEX_PATH = 'path';
    const INDEX_CALLBACK_FUNCTION = 'callbackFunction';
    const INDEX_ARGUMENTS = 'args';

    public function __construct()
    {
    }

    public function createRouter(string $path, callable $callbackFunction, array $args = []): void
    {
        $route = [
            self::INDEX_PATH => $path,
            self::INDEX_CALLBACK_FUNCTION => $callbackFunction,
            self::INDEX_ARGUMENTS => $args
        ];

        $this->routes[] = $route;
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
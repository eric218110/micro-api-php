<?php

namespace Core\maker\routes;

use Core\maker\routes\protocols\RouteProtocol;
use Core\utils\path\Path;

class Route implements RouteProtocol
{

    private $routes;

    public function __construct(array $routes = [])
    {
        $this->routes = $routes;
    }

    public function loadRoutes()
    {

        if ($this->routesIsEmpty()) return $this->loadRoutesWithPathFixed();

        return $this->routes;
    }

    private function loadRoutesWithPathFixed()
    {
        try {
            return include_once(Path::loadRoutesPath());
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    private function routesIsEmpty()
    {
        if (empty($this->routes)) return true;
        return false;
    }
}

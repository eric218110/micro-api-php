<?php

namespace Core\maker\routes;

use Core\maker\http\protocols\URIProtocols;
use Core\maker\routes\protocols\RouteProtocol;

class RouteMatch
{

    private $routes;
    private $currentURI;

    public function __construct(RouteProtocol $routes, URIProtocols $uri)
    {
        $this->routes = $routes->loadRoutes();
        $this->currentURI = $uri->loadUri();
    }

    public function match()
    {
        var_dump($this->currentURI);
    }
}

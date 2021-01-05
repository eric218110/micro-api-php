<?php

use Core\maker\http\URI;
use Core\maker\routes\Route;
use Core\maker\routes\RouteMatch;

try {
    $route = new Route();
    $uri = new URI();

    $matchRoutesWithURI = new RouteMatch($route, $uri);
    $matchRoutesWithURI->match();
} catch (\Throwable $th) {
    echo $th->getMessage();
}

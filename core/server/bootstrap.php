<?php

use Core\maker\http\Request;
use Core\maker\routes\Route;

try {
    $routes = new Route();
    $request = new Request($routes->loadRoutes());
} catch (\Throwable $th) {
    echo $th->getMessage();
}

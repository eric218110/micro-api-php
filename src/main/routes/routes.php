<?php

$getHomeResouce = __DIR__ . 'resources/home/get-home.php';
$getUserResouce = __DIR__ . 'resources/user/get-user.php';

$routes = array(
    "/" => [
        "method" => "get",
        "resource" => $getHomeResouce
    ],
    "/user/{id}" => [
        "method" => "get",
        "resource" => $getUserResouce
    ],
);

return $routes;

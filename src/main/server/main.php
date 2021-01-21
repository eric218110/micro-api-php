<?php

use Core\main\application\Application;

$app = Application::maker();

$router = $app->router();

$router->get('/home/{id}', function () {

});

$router->get('/home', function () {

});


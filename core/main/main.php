<?php

$app = (new \Core\main\factories\app\FactoryApplication())->maker();

$router = $app->router();

$router->get('/home/{id}', function () {

});


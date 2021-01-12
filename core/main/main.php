<?php

use Core\main\factories\http\request\create\FactoryCreateRequest;

$request = new FactoryCreateRequest();
$requestCreate = $request->maker();

var_dump($requestCreate->loadClientIp());
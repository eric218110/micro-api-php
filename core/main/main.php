<?php

use Core\main\factories\http\request\create\FactoryCreateRequest;

$request = (new FactoryCreateRequest())->maker();

var_dump($request->loadQuery()->name);
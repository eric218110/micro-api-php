<?php

use Core\main\application\Application;
use Src\main\adapter\controller\ControllerAdapter;
use Src\presentation\controller\home\HomeController;

$app = Application::maker();

$app->router()->get('home', ControllerAdapter::adapterControllerToCallable(new HomeController()));

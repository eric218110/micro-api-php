<?php

use Core\main\application\Application;
use Src\main\adapter\controller\ControllerAdapter;
use Src\presentation\controller\home\HomeController;

Application::maker()->router()->post('home', ControllerAdapter::adapterControllerToCallable(new HomeController()));

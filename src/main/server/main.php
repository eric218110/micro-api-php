<?php

use Core\main\application\Application;
use Src\presentation\controller\home\HomeController;

$app = Application::maker();

$router = $app->router();

$homeController = new HomeController();

$router->get('/home', array($homeController, 'handler'));


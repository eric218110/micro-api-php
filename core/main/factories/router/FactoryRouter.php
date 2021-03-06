<?php


namespace Core\main\factories\router;

use Core\data\routes\useCase\Route as RouteAlias;
use Core\domain\routes\protocols\Route;

class FactoryRouter
{
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): Route
    {
        if (self::$instance === null) {
            self::$instance = new RouteAlias();
        }
        return self::$instance;
    }
}
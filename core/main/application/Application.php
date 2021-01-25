<?php


namespace Core\main\application;

use Core\domain\app\main\Application as ApplicationProtocols;
use Core\main\factories\app\FactoryApplication;

class Application
{
    private function __construct() {
        
    }

    public static function maker(): ApplicationProtocols {
        return (new FactoryApplication)->maker();
    }
}

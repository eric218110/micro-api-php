<?php


namespace Core\main\factories\http\request;

use Core\domain\protocols\http\request\Request as RequestProtocols;
use Core\data\useCases\http\request\main\Request as RequestData;

class FactoryRequest
{
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): RequestProtocols
    {
        if (self::$instance === null) {
            self::$instance = new RequestData();
        }
        return self::$instance;
    }
}
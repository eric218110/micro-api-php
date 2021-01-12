<?php


namespace Core\main\factories\http\request\create;


use Core\data\useCases\http\request\create\CreateRequest;
use Core\data\useCases\server\php\contents\PHPServer;
use Core\data\useCases\server\http\load\ServerHTTPLoad;
use Core\data\useCases\server\http\validate\ServerHTTPValidate;
use Core\main\factories\protocols\FactoryMachine;

class FactoryCreateRequest extends FactoryMachine
{
    public function maker(): CreateRequest
    {
        $phpServer = new PHPServer();
        $serverHTTPLoad = new ServerHTTPLoad();

        $serverHTTPValidate = new ServerHTTPValidate(
            $serverHTTPLoad,
            $serverHTTPLoad,
            $serverHTTPLoad
        );

        return new CreateRequest(
            $phpServer,
            $serverHTTPLoad,
            $serverHTTPLoad,
            $serverHTTPLoad,
            $serverHTTPValidate,
            $serverHTTPValidate,
            $serverHTTPValidate,
        );
    }
}
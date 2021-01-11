<?php


namespace Core\main\factories\http\request\create;


use Core\data\useCases\http\request\create\CreateRequest;
use Core\data\useCases\server\php\contents\PHPServer;

class FactoryCreateRequest extends \Core\main\factories\protocols\FactoryMachine
{
    public function maker(): CreateRequest
    {
        return new CreateRequest(new PHPServer());
    }
}
<?php


namespace Core\main\factories\http\request\load;

use Core\data\useCases\http\request\load\LoadRequest;
use Core\domain\app\http\HttpRequest;
use Core\main\factories\http\request\FactoryRequest;
use Core\main\factories\protocols\FactoryMachine;

class FactoryLoadRequest extends FactoryMachine
{
    public function maker(): HttpRequest
    {
        return new LoadRequest(FactoryRequest::getInstance());
    }
}
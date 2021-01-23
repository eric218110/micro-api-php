<?php


namespace Core\main\factories\http\response;


use Core\data\useCases\http\response\ResponseHttp;
use Core\domain\app\HttpResponse;
use Core\main\factories\protocols\FactoryMachine;

class FactoryResponse extends FactoryMachine
{
    public function maker(): HttpResponse
    {
        return new ResponseHttp();
    }
}
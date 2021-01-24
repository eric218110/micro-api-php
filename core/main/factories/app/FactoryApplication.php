<?php


namespace Core\main\factories\app;

use Core\data\app\Application;
use Core\domain\app\main\Application as ApplicationProtocols;
use Core\main\factories\protocols\FactoryMachine;
use Core\main\factories\router\useCases\FactoryRegisterRouter;

class FactoryApplication extends FactoryMachine
{
    private $registerRouter;

    public function __construct()
    {
        $this->registerRouter = (new FactoryRegisterRouter())->maker();
    }

    public function maker(): ApplicationProtocols
    {
        return new Application($this->registerRouter);
    }
}
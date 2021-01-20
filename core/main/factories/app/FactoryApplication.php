<?php


namespace Core\main\factories\app;

use Core\data\routes\register\RegisterRouter;
use Core\domain\app\Application as ApplicationProtocols;
use Core\main\factories\protocols\FactoryMachine;
use Core\main\factories\router\useCases\FactoryRegisterRouter;
use Core\data\app\Application;

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
<?php


namespace Core\main\factories\router\useCases;

use Core\data\routes\register\RegisterRouter as RouterRegister;
use Core\domain\routes\register\RegisterRoutes;
use Core\main\factories\router\FactoryRouter;
use Core\main\factories\protocols\FactoryMachine;
use Core\main\factories\router\match\FactoryRouteMatchWithHTTPMethod;
use Core\main\factories\router\match\FactoryRouteMatchWithURI;

class FactoryRegisterRouter extends FactoryMachine
{
    private $routeMatchWithURI;
    private $routerRegister;
    private $routeMatchWithHTTPMethod;
    public function __construct()
    {
        $this->routerRegister = FactoryRouter::getInstance();
        $this->routeMatchWithURI = (new FactoryRouteMatchWithURI())->maker();
        $this->routeMatchWithHTTPMethod = (new FactoryRouteMatchWithHTTPMethod())->maker();
    }

    public function maker(): RegisterRoutes
    {
        return new RouterRegister(
            $this->routerRegister,
            $this->routeMatchWithURI,
            $this->routeMatchWithHTTPMethod
        );
    }
}
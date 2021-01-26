<?php


namespace Core\main\factories\router\useCases;

use Core\data\routes\call\RouteCallFunction;
use Core\data\routes\register\RegisterRouter as RouterRegister;
use Core\domain\routes\register\RegisterRoutes;
use Core\main\factories\http\request\create\FactoryCreateRequest;
use Core\main\factories\http\request\load\FactoryLoadRequest;
use Core\main\factories\http\response\FactoryResponse;
use Core\main\factories\protocols\FactoryMachine;
use Core\main\factories\router\FactoryRouter;
use Core\main\factories\router\validates\match\FactoryValidateRouteMatch;

class FactoryRegisterRouter extends FactoryMachine
{
    private $routerRegister;
    private $createRequest;
    private $httpRequest;
    private $httpResponse;
    private $callResourceRoute;
    private $validateMatchRoute;

    public function __construct()
    {
        $this->routerRegister = FactoryRouter::getInstance();
        $this->createRequest = (new FactoryCreateRequest())->maker();
        $this->httpRequest = (new FactoryLoadRequest())->maker();
        $this->httpResponse = (new FactoryResponse())->maker();
        $this->callResourceRoute = new RouteCallFunction();
        $this->validateMatchRoute = (new FactoryValidateRouteMatch())->maker();
    }

    public function maker(): RegisterRoutes
    {
        return new RouterRegister(
            $this->routerRegister,
            $this->createRequest,
            $this->httpRequest,
            $this->httpResponse,
            $this->callResourceRoute,
            $this->validateMatchRoute
        );
    }
}
<?php


namespace Core\main\factories\router\validates\match;


use Core\data\routes\validate\match\ValidatorRouterMatch;
use Core\domain\routes\validate\match\ValidateMatchRoute;
use Core\main\factories\protocols\FactoryMachine;
use Core\main\factories\router\match\FactoryRouteMatchWithHTTPMethod;
use Core\main\factories\router\match\FactoryRouteMatchWithURI;

class FactoryValidateRouteMatch extends FactoryMachine
{
    private $routeMatchWithURI;
    private $routeMatchWithHTTPMethod;

    public function __construct()
    {
        $this->routeMatchWithURI = (new FactoryRouteMatchWithURI())->maker();
        $this->routeMatchWithHTTPMethod = (new FactoryRouteMatchWithHTTPMethod())->maker();
    }

    public function maker(): ValidateMatchRoute
    {
        return new ValidatorRouterMatch($this->routeMatchWithURI, $this->routeMatchWithHTTPMethod);
    }
}
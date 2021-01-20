<?php


namespace Core\main\factories\router\match;

use Core\data\routes\match\MatchRouteWithHTTPMethod;
use Core\data\useCases\http\method\HTTPMethods;
use Core\domain\routes\match\RouteMatchWithHTTPMethod;
use Core\main\factories\protocols\FactoryMachine;

class FactoryRouteMatchWithHTTPMethod extends FactoryMachine
{
    private $loaderHttpMethod;

    public function __construct()
    {
        $this->loaderHttpMethod = new HTTPMethods();
    }

    public function maker(): RouteMatchWithHTTPMethod
    {
        return new MatchRouteWithHTTPMethod($this->loaderHttpMethod);
    }
}
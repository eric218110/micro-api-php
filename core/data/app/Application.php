<?php


namespace Core\data\app;

use Core\domain\app\Application as ApplicationProtocols;
use Core\domain\routes\register\RegisterRoutes;

class Application implements ApplicationProtocols
{

    private $routesRegister;

    public function __construct(RegisterRoutes $routesRegister)
    {
        $this->routesRegister = $routesRegister;
    }

    public function router(): RegisterRoutes
    {
        return $this->routesRegister;
    }
}
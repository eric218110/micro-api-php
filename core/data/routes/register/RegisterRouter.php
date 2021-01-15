<?php


namespace Core\data\routes\register;

use Core\domain\routes\create\CreateRouter;
use Core\domain\routes\register\RegisterRoutes;

class RegisterRouter implements RegisterRoutes
{
    private $routerCreator;

    public function __construct(CreateRouter $createRouter)
    {
        $this->routerCreator = $createRouter;
    }

    public function get(string $path, callable $callbackFunction, array $args = []): void
    {
        echo "ai";
        $this->routerCreator->createRouter($path, $callbackFunction, $args);
    }
}
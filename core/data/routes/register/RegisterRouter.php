<?php


namespace Core\data\routes\register;

use Core\data\routes\register\traits\RegisterGetRouter;
use Core\domain\protocols\http\request\create\CreateRequest;
use Core\domain\routes\create\CreateRouter;
use Core\domain\routes\match\RouteMatchWithHTTPMethod;
use Core\domain\routes\match\RouteMatchWithURI;
use Core\domain\routes\register\RegisterRoutes;

class RegisterRouter implements RegisterRoutes
{
    use RegisterGetRouter;

    private $routerCreator;
    private $routeMatchWithURI;
    private $routeMatchWithHTTPMethod;
    private $createRequest;

    const HTTP_METHOD_GET = 'get';

    public function __construct(
        CreateRouter $createRouter,
        RouteMatchWithURI $routeMatchWithURI,
        RouteMatchWithHTTPMethod $routeMatchWithHTTPMethod,
        CreateRequest $createRequest
    )
    {
        $this->routerCreator = $createRouter;
        $this->routeMatchWithURI = $routeMatchWithURI;
        $this->routeMatchWithHTTPMethod = $routeMatchWithHTTPMethod;
        $this->createRequest = $createRequest;
    }

    public function get(string $path, callable $callbackFunction, array $args = []): void
    {
        if ($this->validateMatchRoute($path)) {
            $this->routerCreator->createRouter($path, $callbackFunction, $args);
            $this->createRequest->createBodyQueryClientIpParamsInRequest($path);
            exit(0);
        } else {
            http_response_code(404);
        }
    }

    private function validateMatchRoute(string $path): bool
    {
        if ($this->routeMatchWithURI->matchRouteWithURI($path)) {
            if ($this->routeMatchWithHTTPMethod->matchRouteWithHTTPMethod(self::HTTP_METHOD_GET)) {
                return true;
            }
        }
        return false;
    }
}
<?php


namespace Core\data\routes\register;

use Core\data\routes\register\traits\RegisterGetRouter;
use Core\data\routes\register\traits\RegisterPostRouter;
use Core\domain\app\http\HttpRequest;
use Core\domain\app\http\HttpResponse;
use Core\domain\protocols\http\request\create\CreateRequest;
use Core\domain\routes\call\CallResourceRoute;
use Core\domain\routes\create\CreateRouter;
use Core\domain\routes\register\RegisterRoutes;
use Core\domain\routes\validate\match\ValidateMatchRoute;

class RegisterRouter implements RegisterRoutes
{
    use RegisterGetRouter;
    use RegisterPostRouter;

    private $routerCreator;
    private $createRequest;
    private $httpRequest;
    private $httpResponse;
    private $callResourceRoute;
    private $validateMatchRoute;

    const HTTP_METHOD_GET = 'get';
    const HTTP_METHOD_POST = 'post';

    public function __construct(
        CreateRouter $createRouter,
        CreateRequest $createRequest,
        HttpRequest $httpRequest,
        HttpResponse $httpResponse,
        CallResourceRoute $callResourceRoute,
        ValidateMatchRoute $validateMatchRoute
    )
    {
        $this->routerCreator = $createRouter;
        $this->createRequest = $createRequest;
        $this->httpRequest = $httpRequest;
        $this->httpResponse = $httpResponse;
        $this->callResourceRoute = $callResourceRoute;
        $this->validateMatchRoute = $validateMatchRoute;
    }

    private function validateCreateRouterCreateBodyAndCallFunction(string $path, callable $callbackFunction, array $args, string $httpMethod)
    {
        if ($this->validateMatchRoute->validateRouteMatch($path, $httpMethod)) {
            $this->routerCreator->createRouter($path, $callbackFunction, $args);
            $this->createRequest->createBodyQueryClientIpParamsInRequest($path, $args);
            $this->callResourceRoute->callFunctionRoute(
                $callbackFunction,
                $this->httpRequest,
                $this->httpResponse
            );
        } else {
            http_response_code(404);
        }
    }
}
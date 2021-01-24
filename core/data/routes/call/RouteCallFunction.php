<?php


namespace Core\data\routes\call;

use Core\domain\app\http\HttpRequest;
use Core\domain\app\http\HttpResponse;
use Core\domain\routes\call\CallResourceRoute;

class RouteCallFunction implements CallResourceRoute
{

    public function callFunctionRoute(callable $callbackFunction, HttpRequest $httpRequest, HttpResponse $httpResponse): void
    {
        call_user_func($callbackFunction);
    }
}
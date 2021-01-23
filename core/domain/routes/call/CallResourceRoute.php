<?php


namespace Core\domain\routes\call;


use Core\domain\app\HttpRequest;
use Core\domain\app\HttpResponse;

interface CallResourceRoute
{
    public function callFunctionRoute(
        callable $callbackFunction,
        HttpRequest $httpRequest,
        HttpResponse $httpResponse
    ): void;
}
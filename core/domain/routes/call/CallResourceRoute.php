<?php


namespace Core\domain\routes\call;


use Core\domain\app\http\HttpRequest;
use Core\domain\app\http\HttpResponse;

interface CallResourceRoute
{
    public function callFunctionRoute(
        callable $callbackFunction,
        HttpRequest $httpRequest,
        HttpResponse $httpResponse
    ): void;
}
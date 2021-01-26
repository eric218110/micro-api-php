<?php


namespace Core\data\routes\register\traits;


trait RegisterCustomHttpMethod
{
    public function customHttpMethod(string $customHttpMethod, string $path, callable $callbackFunction, array $args = []): void
    {
        $this->validateCreateRouterCreateBodyAndCallFunction($path, $callbackFunction, $args, $customHttpMethod);
    }
}
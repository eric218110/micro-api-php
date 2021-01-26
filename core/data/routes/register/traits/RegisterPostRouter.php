<?php


namespace Core\data\routes\register\traits;


trait RegisterPostRouter
{
    public function post(string $path, callable $callbackFunction, array $args = []): void
    {
        $this->validateCreateRouterCreateBodyAndCallFunction(
            $path,
            $callbackFunction,
            $args,
            self::HTTP_METHOD_POST);
    }
}
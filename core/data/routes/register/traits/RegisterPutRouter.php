<?php


namespace Core\data\routes\register\traits;


trait RegisterPutRouter
{
    public function put(string $path, callable $callbackFunction, array $args = []): void
    {
        $this->validateCreateRouterCreateBodyAndCallFunction($path, $callbackFunction, $args, self::HTTP_METHOD_PUT);
    }
}
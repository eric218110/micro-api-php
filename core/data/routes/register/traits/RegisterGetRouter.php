<?php


namespace Core\data\routes\register\traits;


trait RegisterGetRouter
{
    public function get(string $path, callable $callbackFunction, array $args = []): void
    {
        $this->validateCreateRouterCreateBodyAndCallFunction(
            $path,
            $callbackFunction,
            $args,
            self::HTTP_METHOD_GET);
    }
}
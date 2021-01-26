<?php


namespace Core\data\routes\register\traits;


trait RegisterDeleteRouter
{
    public function delete(string $path, callable $callbackFunction, array $args = []): void
    {
        $this->validateCreateRouterCreateBodyAndCallFunction($path, $callbackFunction, $args, self::HTTP_METHOD_DELETE);
    }
}
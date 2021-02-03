<?php


namespace Core\data\routes\register\traits;


trait RegisterPatchRouter
{
    public function patch(string $path, callable $callbackFunction, array $args = []): void
    {
        $this->validateCreateRouterCreateBodyAndCallFunction($path, $callbackFunction, $args, self::HTTP_METHOD_PATCH);
    }
}
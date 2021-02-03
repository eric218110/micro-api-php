<?php


namespace Core\domain\routes\register;


interface RegisterPatchRouter
{
    public function patch(string $path, callable $callbackFunction, array $args = []): void;
}
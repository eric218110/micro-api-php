<?php


namespace Core\domain\routes\create;


interface CreateRouter
{
    public function createRouter(string $path, callable $callbackFunction, array $args = []): void;
}
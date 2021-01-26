<?php


namespace Core\domain\routes\register;


interface RegisterCustomMethodRouter
{
    public function customHttpMethod(string $customHttpMethod, string $path, callable $callbackFunction, array $args = []): void;
}
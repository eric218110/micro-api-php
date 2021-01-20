<?php


namespace Core\domain\routes\register;


interface RegisterDeleteRouter
{
    public function delete(string $path, callable $callbackFunction, array $args = []): void;
}
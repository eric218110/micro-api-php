<?php


namespace Core\domain\routes\register;


interface RegisterPutRouter
{
    public function put(string $path, callable $callbackFunction, array $args=[]): void;
}
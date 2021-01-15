<?php


namespace Core\domain\routes\register;


interface RegisterPostRouter
{
    public function post(string $path, callable $callbackFunction, array $args=[]): void;
}
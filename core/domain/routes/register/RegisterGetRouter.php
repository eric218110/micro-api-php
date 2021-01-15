<?php


namespace Core\domain\routes\register;


interface RegisterGetRouter
{
    public function get(string $path, callable $callbackFunction, array $args=[]): void;
}
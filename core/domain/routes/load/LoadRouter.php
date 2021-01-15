<?php


namespace Core\domain\routes\load;


use Core\domain\routes\protocols\Route;

interface LoadRouter
{
    public function loadRouter(string $path): Route;
}
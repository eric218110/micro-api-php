<?php


namespace Core\domain\app\main;


use Core\domain\routes\register\RegisterRoutes;

interface Application
{
    public function router(): RegisterRoutes;
}
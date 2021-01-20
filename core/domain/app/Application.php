<?php


namespace Core\domain\app;


use Core\domain\routes\register\RegisterRoutes;

interface Application
{
    public function router(): RegisterRoutes;
}
<?php


namespace Core\domain\routes\protocols;


use Core\domain\routes\create\CreateRouter;
use Core\domain\routes\load\LoadPathRoute;
use Core\domain\routes\load\LoadRoutes;

interface Route extends CreateRouter, LoadRoutes, LoadPathRoute
{
}
<?php


namespace Core\domain\routes\register;


interface RegisterRoutes extends
    RegisterGetRouter,
    RegisterPostRouter,
    RegisterPutRouter,
    RegisterDeleteRouter,
    RegisterPatchRouter,
    RegisterCustomMethodRouter
{

}
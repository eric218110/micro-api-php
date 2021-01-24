<?php


namespace Src\main\adapter\controller;


use Core\domain\app\controller\ApplicationController;

class ControllerAdapter
{
    const INDEX_OF_METHOD_HANDLER = 0;

    static function adapterControllerToCallable(ApplicationController $applicationController): array
    {
        return array($applicationController, get_class_methods($applicationController)[self::INDEX_OF_METHOD_HANDLER]);
    }
}
<?php

namespace Core\maker\server;

class Server
{
    public static function loadRequestURI(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    public static function loadHostname(): string
    {
        return $_SERVER['HTTP_HOST'];
    }
}

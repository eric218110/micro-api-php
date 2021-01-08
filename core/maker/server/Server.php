<?php

namespace Core\maker\server;

class Server
{
    public static function loadRequestURIFromServer(): string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public static function loadHostname(): string
    {
        return $_SERVER['HTTP_HOST'];
    }
}

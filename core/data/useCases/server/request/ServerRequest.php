<?php

namespace Core\data\useCases\server\request;

use Core\domain\protocols\server\request\ServerRequestBaseName;
use Core\domain\protocols\server\request\ServerRequestHostName;
use Core\domain\protocols\server\request\ServerRequestMethod;
use Core\domain\protocols\server\request\ServerRequestURI;

class ServerRequest implements
    ServerRequestHostName,
    ServerRequestURI,
    ServerRequestMethod,
    ServerRequestBaseName
{
    public function loadRequestURI(): string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public function loadHostname(): string
    {
        return $_SERVER['HTTP_HOST'];
    }

    public function loadRequestMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function loadBaseNameURI(): string
    {
        return basename($_SERVER['REQUEST_URI']);
    }
}

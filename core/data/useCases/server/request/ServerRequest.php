<?php

namespace Core\data\useCases\server\request;

use Core\domain\protocols\server\request\ServerRequestHostName;
use Core\domain\protocols\server\request\ServerRequestURI;

class ServerRequest implements ServerRequestHostName, ServerRequestURI
{
    public function loadRequestURI(): string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);;
    }

    public function loadHostname(): string
    {
        return $_SERVER['HTTP_HOST'];
    }
}

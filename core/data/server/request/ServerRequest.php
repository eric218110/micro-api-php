<?php

namespace Core\data\server\request;

use Core\domain\server\request\ServerRequestHostName;
use Core\domain\server\request\ServerRequestURI;

class ServerRequest implements ServerRequestHostName, ServerRequestURI
{
    public function loadRequestURI(): string
    {
        return '';
    }

    public function loadHostname(): string
    {
        return '';
    }
}

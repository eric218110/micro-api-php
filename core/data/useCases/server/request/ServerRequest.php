<?php

namespace Core\data\useCases\server\request;

use Core\domain\protocols\server\request\ServerRequestHostName;
use Core\domain\protocols\server\request\ServerRequestURI;

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

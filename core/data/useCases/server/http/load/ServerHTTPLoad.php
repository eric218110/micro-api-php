<?php


namespace Core\data\useCases\server\http\load;

use Core\domain\protocols\server\http\load\ServerHTTPLoadRemoteAddress;
use Core\domain\protocols\server\http\load\ServerHTTPLoadXForwarder;
use Core\domain\protocols\server\http\load\ServerHTTPLoadClientIP;

class ServerHTTPLoad implements ServerHTTPLoadRemoteAddress, ServerHTTPLoadXForwarder, ServerHTTPLoadClientIP
{

    public function loadHttpRemoteAddress(): string
    {
        // TODO: Implement loadHttpRemoteAddress() method.
    }

    public function loadHttpClientIp(): string
    {
        // TODO: Implement loadHttpClientIp() method.
    }

    public function loadHttpXForwarder(): string
    {
        // TODO: Implement loadHttpXForwarder() method.
    }
}
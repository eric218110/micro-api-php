<?php


namespace Core\data\useCases\server\http\load;

use Core\domain\protocols\server\http\load\ServerHTTPLoadRemoteAddress;
use Core\domain\protocols\server\http\load\ServerHTTPLoadXForwarder;
use Core\domain\protocols\server\http\load\ServerHTTPLoadClientIP;

class ServerHTTPLoad implements ServerHTTPLoadRemoteAddress, ServerHTTPLoadXForwarder, ServerHTTPLoadClientIP
{

    public function loadHttpRemoteAddress(): ?string
    {
        return $_SERVER['REMOTE_ADDR'];
    }

    public function loadHttpClientIp(): ?string
    {
        return $_SERVER['HTTP_CLIENT_IP'];
    }

    public function loadHttpXForwarder(): ?string
    {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
}
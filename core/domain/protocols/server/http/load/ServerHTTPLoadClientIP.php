<?php


namespace Core\domain\protocols\server\http\load;


interface ServerHTTPLoadClientIP
{
    public function loadHttpClientIp(): string;
}
<?php


namespace Core\domain\protocols\server\http\load;


interface ServerHTTPLoadRemoteAddress
{
    public function loadHttpRemoteAddress(): string;
}
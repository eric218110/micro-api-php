<?php


namespace Core\domain\protocols\server\http\load;


interface ServerHTTPLoadXForwarder
{
    public function loadHttpXForwarder(): ?string;
}
<?php 

namespace Core\domain\protocols\server\request;

interface ServerRequestHostName {
    public function loadHostname(): string;
}
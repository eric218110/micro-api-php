<?php 

namespace Core\domain\server\request;

interface ServerRequestHostName {
    public function loadHostname(): string;
}
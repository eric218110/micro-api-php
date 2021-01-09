<?php 

namespace Core\domain\protocols\server\request;

interface ServerRequestURI {
    public function loadRequestURI(): string;
}
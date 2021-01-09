<?php 

namespace Core\domain\server\request;

interface ServerRequestURI {
    public function loadRequestURI(): string;
}
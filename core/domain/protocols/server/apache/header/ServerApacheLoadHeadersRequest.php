<?php


namespace Core\domain\protocols\server\apache\header;


interface ServerApacheLoadHeadersRequest
{
    public function loadHeaders(): array;
}
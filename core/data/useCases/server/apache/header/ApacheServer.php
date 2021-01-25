<?php


namespace Core\data\useCases\server\apache\header;


use Core\domain\protocols\server\apache\header\ServerApacheLoadHeadersRequest;

class ApacheServer implements ServerApacheLoadHeadersRequest
{
    public function loadHeaders(): array
    {
        return apache_request_headers();
    }
}
<?php


namespace Core\data\useCases\http\method;

use Core\domain\protocols\http\method\LoadHTTPMethod;

class HTTPMethods implements LoadHTTPMethod
{
    public function loadHttpMethod(): string
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }
}
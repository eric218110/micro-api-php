<?php


namespace Core\domain\protocols\http\method;


interface LoadHTTPMethod
{
    public function loadHttpMethod(): string;
}
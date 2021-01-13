<?php


namespace Core\domain\protocols\server\http\validate;


interface ServerHTTPValidateClientIP
{
    public function validateHttpClientIPIsEmpty(): bool;
}
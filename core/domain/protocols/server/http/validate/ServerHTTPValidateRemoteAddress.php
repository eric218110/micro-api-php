<?php


namespace Core\domain\protocols\server\http\validate;


interface ServerHTTPValidateRemoteAddress
{
    public function validateHttpRemoteAddressIsEmpty(): bool;
}
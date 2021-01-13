<?php


namespace Core\domain\protocols\server\http\validate;


interface ServerHTTPValidateXForwarder
{
    public function validateHttpXForwarderIsEmpty(): bool;
}
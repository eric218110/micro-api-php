<?php


namespace Core\data\useCases\server\http\validate;

use Core\domain\protocols\server\http\validate\ServerHTTPValidateClientIP;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateRemoteAddress;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateXForwarder;

class ServerHTTPValidate implements ServerHTTPValidateRemoteAddress, ServerHTTPValidateXForwarder, ServerHTTPValidateClientIP
{

    public function validateHttpClientIPIsEmpty(): bool
    {
        // TODO: Implement validateHttpClientIPIsEmpty() method.
    }

    public function validateHttpRemoteAddressIsEmpty(): bool
    {
        // TODO: Implement validateHttpRemoteAddressIsEmpty() method.
    }

    public function validateHttpXForwarderIsEmpty(): bool
    {
        // TODO: Implement validateHttpXForwarderIsEmpty() method.
    }
}
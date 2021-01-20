<?php


namespace Core\data\useCases\server\http\validate;

use Core\domain\protocols\server\http\load\ServerHTTPLoadClientIP;
use Core\domain\protocols\server\http\load\ServerHTTPLoadRemoteAddress;
use Core\domain\protocols\server\http\load\ServerHTTPLoadXForwarder;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateClientIP;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateRemoteAddress;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateXForwarder;

class ServerHTTPValidate implements ServerHTTPValidateRemoteAddress, ServerHTTPValidateXForwarder, ServerHTTPValidateClientIP
{
    private $serverHTTPLoadClientIP;
    private $serverHTTPLoadXForwarder;
    private $serverHTTPLoadRemoteAddress;

    public function __construct(
        ServerHTTPLoadClientIP $serverHTTPLoadClientIP,
        ServerHTTPLoadXForwarder $serverHTTPLoadXForwarder,
        ServerHTTPLoadRemoteAddress $serverHTTPLoadRemoteAddress
    )
    {
        $this->serverHTTPLoadClientIP = $serverHTTPLoadClientIP;
        $this->serverHTTPLoadXForwarder = $serverHTTPLoadXForwarder;
        $this->serverHTTPLoadRemoteAddress = $serverHTTPLoadRemoteAddress;
    }

    public function validateHttpClientIPIsEmpty(): bool
    {
        if (empty($this->serverHTTPLoadClientIP->loadHttpClientIp())) return true;
        return false;
    }

    public function validateHttpRemoteAddressIsEmpty(): bool
    {
        if (empty($this->serverHTTPLoadRemoteAddress->loadHttpRemoteAddress())) return true;
        return false;
    }

    public function validateHttpXForwarderIsEmpty(): bool
    {
        if (empty($this->serverHTTPLoadXForwarder->loadHttpXForwarder())) return true;
        return false;
    }
}
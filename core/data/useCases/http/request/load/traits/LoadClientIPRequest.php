<?php


namespace Core\data\useCases\http\request\load\traits;


trait LoadClientIPRequest
{
    public function loadClientIp(): string
    {
        if (!$this->serverHTTPValidateClientIP->validateHttpClientIPIsEmpty()) return $this->serverHTTPLoadClientIP->loadHttpClientIp();
        if (!$this->serverHTTPValidateXForwarder->validateHttpXForwarderIsEmpty()) return $this->serverHTTPLoadXForwarder->loadHttpXForwarder();
        if (!$this->serverHTTPValidateRemoteAddress->validateHttpRemoteAddressIsEmpty()) return $this->serverHTTPLoadRemoteAddress->loadHttpRemoteAddress();
        return "0.0.0.0";
    }
}
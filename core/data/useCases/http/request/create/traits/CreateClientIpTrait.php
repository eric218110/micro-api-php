<?php


namespace Core\data\useCases\http\request\create\traits;


trait CreateClientIpTrait
{
    public function createClientIp(): void
    {
        if (!$this->serverHTTPValidateClientIP->validateHttpClientIPIsEmpty()) $this->request->setClientIp($this->serverHTTPLoadClientIP->loadHttpClientIp());
        if (!$this->serverHTTPValidateXForwarder->validateHttpXForwarderIsEmpty()) $this->request->setClientIp($this->serverHTTPLoadXForwarder->loadHttpXForwarder());
        if (!$this->serverHTTPValidateRemoteAddress->validateHttpRemoteAddressIsEmpty()) $this->request->setClientIp($this->serverHTTPLoadRemoteAddress->loadHttpRemoteAddress());
        $this->request->setClientIp("0.0.0.0");
    }
}
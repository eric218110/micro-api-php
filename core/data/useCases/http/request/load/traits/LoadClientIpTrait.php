<?php


namespace Core\data\useCases\http\request\load\traits;


trait LoadClientIpTrait
{
    public function loadClientIp(): string
    {
        return $this->request->getClientIp();
    }
}
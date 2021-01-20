<?php


namespace Core\domain\protocols\http\request\traits\load\clientIp;


interface LoadClientIpRequest
{
    public function loadClientIp(): string;
}
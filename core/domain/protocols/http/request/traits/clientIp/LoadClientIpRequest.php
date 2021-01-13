<?php


namespace Core\domain\protocols\http\request\traits\clientIp;


interface LoadClientIpRequest
{
    public function loadClientIp(): string;
}
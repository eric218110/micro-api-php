<?php

namespace Core\maker\http\traits;

trait ClientIP
{
    public function hasAccessPermissionWithIpAddress(string $ipValidateAcess)
    {
        $clientIp = $this->loadClientIP();

        if ($clientIp === $ipValidateAcess) return true;
        return false;
    }

    public function loadClientIP()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) $_SERVER['HTTP_X_FORWARDED_FOR'];
        return $_SERVER['REMOTE_ADDR'];
    }
}

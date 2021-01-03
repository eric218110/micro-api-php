<?php

namespace Core\maker\http\traits;

trait ClientIP
{
    public function hasAccessPermissionWithIpAddress(string $ipValidateAccess): bool
    {
        $clientIp = $this->loadClientIP();

        if ($clientIp === $ipValidateAccess) return true;
        return false;
    }

    public function loadClientIP(): string
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return $_SERVER['HTTP_X_FORWARDED_FOR'];
        if (!empty($_SERVER['REMOTE_ADDR'])) return $_SERVER['REMOTE_ADDR'];
        return "0.0.0.0";
    }
}

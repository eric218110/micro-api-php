<?php


namespace Core\domain\protocols\http\request\traits\clientIp;


interface ValidateClientIPHasPermission
{
    public function validateClientIpHasPermissionWithIpAddress(): bool;
}
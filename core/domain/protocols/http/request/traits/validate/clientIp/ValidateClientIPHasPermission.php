<?php


namespace Core\domain\protocols\http\request\traits\validate\clientIp;


interface ValidateClientIPHasPermission
{
    public function validateClientIpHasPermissionWithIpAddress(): bool;
}
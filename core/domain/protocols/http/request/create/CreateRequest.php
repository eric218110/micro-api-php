<?php


namespace Core\domain\protocols\http\request\create;


use Core\domain\protocols\http\request\traits\create\body\CreateBodyRequest;
use Core\domain\protocols\http\request\traits\create\clientIp\CreateClientIpRequest;
use Core\domain\protocols\http\request\traits\create\params\CreateParamsRequest;
use Core\domain\protocols\http\request\traits\create\query\CreateQueryRequest;

interface CreateRequest extends CreateBodyRequest, CreateClientIpRequest, CreateParamsRequest, CreateQueryRequest
{
    public function createBodyQueryClientIpParamsInRequest(): void;
}
<?php


namespace Core\domain\protocols\http\request\create;

use Core\domain\protocols\http\request\traits\body\LoadBodyRequest;
use Core\domain\protocols\http\request\traits\clientIp\LoadClientIpRequest;
use Core\domain\protocols\http\request\traits\params\LoadParamsRequest;
use Core\domain\protocols\http\request\traits\query\LoadQueryRequest;

interface CreateRequest extends LoadBodyRequest, LoadQueryRequest, LoadClientIpRequest, LoadParamsRequest
{

}
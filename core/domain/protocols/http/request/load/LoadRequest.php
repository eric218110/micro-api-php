<?php


namespace Core\domain\protocols\http\request\load;

use Core\domain\protocols\http\request\traits\load\body\LoadBodyRequest;
use Core\domain\protocols\http\request\traits\load\clientIp\LoadClientIpRequest;
use Core\domain\protocols\http\request\traits\load\params\LoadParamsRequest;
use Core\domain\protocols\http\request\traits\load\query\LoadQueryRequest;

interface LoadRequest extends LoadBodyRequest, LoadClientIpRequest, LoadParamsRequest, LoadQueryRequest
{

}
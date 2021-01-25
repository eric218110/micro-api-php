<?php


namespace Core\domain\app\http;


use Core\domain\protocols\http\request\traits\load\args\LoadArgsRequest;
use Core\domain\protocols\http\request\traits\load\body\LoadBodyRequest;
use Core\domain\protocols\http\request\traits\load\clientIp\LoadClientIpRequest;
use Core\domain\protocols\http\request\traits\load\header\LoadHeaderRequest;
use Core\domain\protocols\http\request\traits\load\params\LoadParamsRequest;
use Core\domain\protocols\http\request\traits\load\query\LoadQueryRequest;

interface HttpRequest extends
    LoadBodyRequest,
    LoadClientIpRequest,
    LoadParamsRequest,
    LoadQueryRequest,
    LoadArgsRequest,
    LoadHeaderRequest
{

}
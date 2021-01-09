<?php


namespace Core\domain\protocols\http\request\traits\params;


interface LoadParamsRequest
{
    public function loadParams(): string;
}
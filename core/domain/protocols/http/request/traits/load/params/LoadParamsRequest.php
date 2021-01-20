<?php


namespace Core\domain\protocols\http\request\traits\params;

use stdClass;

interface LoadParamsRequest
{
    public function loadParams(): stdClass;
}
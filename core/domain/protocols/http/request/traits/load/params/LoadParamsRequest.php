<?php


namespace Core\domain\protocols\http\request\traits\load\params;

use stdClass;

interface LoadParamsRequest
{
    public function loadParams(): ?stdClass;
}
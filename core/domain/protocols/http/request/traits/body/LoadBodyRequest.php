<?php


namespace Core\domain\protocols\http\request\traits\body;

use stdClass;

interface LoadBodyRequest
{
    public function loadBody(): stdClass;
}
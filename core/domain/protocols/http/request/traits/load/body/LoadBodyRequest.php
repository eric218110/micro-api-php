<?php


namespace Core\domain\protocols\http\request\traits\load\body;

use stdClass;

interface LoadBodyRequest
{
    public function loadBody(): ?stdClass;
}
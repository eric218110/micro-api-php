<?php


namespace Core\domain\protocols\http\request\traits\create\body;

use stdClass;

interface CreateBodyRequest
{
    public function createBody(): void;
}
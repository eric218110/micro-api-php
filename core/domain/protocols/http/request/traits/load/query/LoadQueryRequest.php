<?php


namespace Core\domain\protocols\http\request\traits\query;

use stdClass;

interface LoadQueryRequest
{
    public function loadQuery(): stdClass;
}
<?php


namespace Core\domain\protocols\http\request\traits\load\query;

use stdClass;

interface LoadQueryRequest
{
    public function loadQuery(): stdClass;
}
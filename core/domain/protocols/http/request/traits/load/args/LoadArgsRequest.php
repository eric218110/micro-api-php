<?php


namespace Core\domain\protocols\http\request\traits\load\args;

use stdClass;

interface LoadArgsRequest
{
    public function loadArgs(): stdClass;
}
<?php

namespace Core\maker\http;

use Core\maker\http\traits\Body;
use stdClass;

class Request
{
    use Body;

    public function __construct()
    {
        return $this->maker();
    }

    

    private function maker()
    {
        $maker = new stdClass();
        $maker->body = $this->createBody();
        return $maker;
    }
}

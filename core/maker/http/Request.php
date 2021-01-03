<?php

namespace Core\maker\http;

use Core\maker\http\traits\Body;
use Core\maker\http\traits\Query;
use Core\maker\http\traits\ClientIP;
use stdClass;

class Request
{
    use Body;
    use ClientIP;
    use Query;

    public function createRequest()
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

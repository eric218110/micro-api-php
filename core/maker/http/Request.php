<?php

namespace Core\maker\http;

use Core\maker\http\traits\Body;
use Core\maker\http\traits\Query;
use Core\maker\http\traits\ClientIP;
use stdClass;

class Request
{
    use Body;
    use Query;
    use ClientIP;

    public function __construct()
    {
        return $this->maker();
    }

    private function maker()
    {
        $maker = new stdClass();
        $maker->body = $this->createBody();
        $maker->query = $this->createQuery();
        $maker->clientIp = $this->loadClientIP();
        return $maker;
    }
}

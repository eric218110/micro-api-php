<?php

namespace Core\maker\http;

use Core\maker\http\traits\Body;
use Core\maker\http\traits\Query;
use Core\maker\http\traits\ClientIP;
use Core\maker\http\traits\Params;
use stdClass;

class Request
{
    use Body;
    use ClientIP;
    use Query;
    use Params;

    public function createRequest(string $currentRoute)
    {
        return $this->maker($currentRoute);
    }

    private function maker(string $currentRoute)
    {
        $maker = new stdClass();
        $maker->body = $this->createBody();
        $maker->clientIP = $this->loadClientIP();
        $maker->params = $this->loadParamsRequest($currentRoute);
        
        return $maker;
    }
}

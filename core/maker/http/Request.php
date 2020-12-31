<?php

namespace Core\maker\http;

use stdClass;

class Request
{

    public function __construct() {
        return $this->maker();
    }

    public function loadBody()
    {
        return $this->createBody();
    }

    private function maker()
    {
        $maker = new stdClass();
        $maker->body = $this->createBody();
        return $maker;
    }

    private function createBody()
    {
        $body = file_get_contents('php://input');
        if ($body) {
            $obj = new stdClass;
            $bodyToArray = json_decode($body, true);
            foreach ($bodyToArray as $key => $value) {
                if ($key && $value) {
                    $obj->$key = $value;
                }
            }
            $body = $obj;
        }
        if($body === null){
            return [];
        }
        return $body;
    }
}

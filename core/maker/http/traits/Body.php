<?php

namespace Core\maker\http\traits;

use stdClass;

trait Body
{
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
        if ($body === null) {
            return [];
        }
        return $body;
    }

    public function loadBody()
    {
        return $this->createBody();
    }
}

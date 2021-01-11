<?php


namespace Core\data\useCases\http\request\create\traits;

use stdClass;

trait CreateBodyRequest
{
    public function loadBody(): stdClass
    {
        $body = $this->serverPHPGetContents->loadContents();

        if ($body) {
            $objStd = new stdClass;
            $bodyToArray = json_decode($body, true);
            foreach ($bodyToArray as $key => $value) {
                if ($key && $value) {
                    $objStd->$key = $value;
                }
            }
            $body = $objStd;
        }

        if ($body === '') return new stdClass();

        return $body;
    }
}
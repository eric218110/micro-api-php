<?php


namespace Core\data\useCases\http\request\create\traits;

use stdClass;

trait CreateBodyTrait
{
    public function createBody(): void
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

        if ($body === '') $this->request->setBody(new stdClass());

        $this->request->setBody(new stdClass());
    }
}
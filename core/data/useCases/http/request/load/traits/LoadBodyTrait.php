<?php


namespace Core\data\useCases\http\request\load\traits;

use stdClass;

trait LoadBodyTrait
{
    public function loadBody(): ?stdClass
    {
        return $this->request->getBody();
    }
}
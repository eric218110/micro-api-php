<?php


namespace Core\data\useCases\http\request\load\traits;


use stdClass;

trait LoadHeadersTrait
{
    public function loadHeader(): ?stdClass
    {
        return $this->request->getHeaders();
    }
}
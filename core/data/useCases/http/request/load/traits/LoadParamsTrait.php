<?php


namespace Core\data\useCases\http\request\load\traits;

use stdClass;

trait LoadParamsTrait
{
    public function loadParams(): ?stdClass
    {
        return $this->request->getParams();
    }
}
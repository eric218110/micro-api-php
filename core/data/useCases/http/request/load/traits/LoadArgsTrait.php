<?php


namespace Core\data\useCases\http\request\load\traits;

use stdClass;

trait LoadArgsTrait
{
    public function loadArgs(): stdClass
    {
        return $this->request->getArgs();
    }
}
<?php


namespace Core\data\useCases\http\request\load\traits;


use stdClass;

trait LoadQueryTrait
{
    public function loadQuery(): ?stdClass
    {
        return $this->request->getQuery();
    }
}
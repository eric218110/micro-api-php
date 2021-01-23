<?php


namespace Core\data\useCases\http\request\create\traits;


trait CreateArgsTrait
{
    public function createArgs(array $args): void
    {
        $this->request->setArgs($args);
    }
}
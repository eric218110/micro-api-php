<?php


namespace Core\domain\protocols\http\response\json;


interface ResponseToJSON
{
    public function json(array $args): void;
}
<?php


namespace Core\domain\protocols\http\request\traits\create\args;


interface CreateArgsRequest
{
    public function createArgs(array $args): void;
}
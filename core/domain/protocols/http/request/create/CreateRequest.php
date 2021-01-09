<?php


namespace Core\domain\protocols\http\request\create;


use Core\domain\protocols\http\request\create;

interface CreateRequest
{
    public function create(): void;
}
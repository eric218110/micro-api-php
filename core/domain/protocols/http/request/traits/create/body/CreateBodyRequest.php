<?php


namespace Core\domain\protocols\http\request\traits\create\body;

interface CreateBodyRequest
{
    public function createBody(): void;
}
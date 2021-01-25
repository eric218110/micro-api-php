<?php


namespace Core\domain\protocols\http\request\traits\create\header;


interface CreateHeaderRequest
{
    public function createHeader(): void;
}
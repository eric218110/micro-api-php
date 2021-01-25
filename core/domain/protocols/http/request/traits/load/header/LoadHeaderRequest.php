<?php


namespace Core\domain\protocols\http\request\traits\load\header;


use stdClass;

interface LoadHeaderRequest
{
    public function loadHeader(): ?stdClass;
}
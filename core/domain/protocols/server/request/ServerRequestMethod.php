<?php


namespace Core\domain\protocols\server\request;


interface ServerRequestMethod
{
    public function loadRequestMethod(): string;
}
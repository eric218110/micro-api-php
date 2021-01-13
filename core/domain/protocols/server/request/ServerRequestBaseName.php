<?php


namespace Core\domain\protocols\server\request;


interface ServerRequestBaseName
{
    public function loadBaseNameURI(): string;
}
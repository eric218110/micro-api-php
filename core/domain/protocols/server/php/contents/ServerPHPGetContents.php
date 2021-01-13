<?php

namespace Core\domain\protocols\server\php\contents;

interface ServerPHPGetContents
{
    public function loadContents(): string;
}
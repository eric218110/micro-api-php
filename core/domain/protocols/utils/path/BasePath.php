<?php

namespace Core\domain\protocols\utils\path;

interface BasePath
{
    public function loadIndexPath(): string;
}
<?php

namespace Core\domain\protocols\utils\path;

interface BaseFolder {
    public function loadIndexFolder(): string;
}
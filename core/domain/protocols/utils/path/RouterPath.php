<?php

namespace Core\domain\protocols\utils\path;

interface RouterPath {
    public function loadRoutePath(): string;
}
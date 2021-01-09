<?php

namespace Core\domain\utils\path;

interface RouterPath {
    public function loadRoutePath(): string;
}
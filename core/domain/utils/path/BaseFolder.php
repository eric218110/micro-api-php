<?php

namespace Core\domain\utils\path;

interface BaseFolder {
    public function loadIndexFolder(): string;
}
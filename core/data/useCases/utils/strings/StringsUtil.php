<?php

namespace Core\data\useCases\utils\strings;

use Core\domain\protocols\utils\strings\RemoveFirstAndLastBar;

class StringsUtil implements RemoveFirstAndLastBar
{
    public function remove(string $valueString): string
    {
        $pattern = '/^\/?|\/?$/i';
        $replacement = '${1}$3';
        return preg_replace($pattern, $replacement, $valueString);
    }
}

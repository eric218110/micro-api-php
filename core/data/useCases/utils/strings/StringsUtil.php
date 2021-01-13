<?php

namespace Core\data\useCases\utils\strings;

use Core\domain\protocols\utils\strings\RemoveFirstAndLastBar;
use Core\domain\protocols\utils\strings\RemoveFirstAndLastParentheses;

class StringsUtil implements RemoveFirstAndLastBar, RemoveFirstAndLastParentheses
{
    public function remove(string $valueString): string
    {
        $pattern = '/^\/?|\/?$/i';
        $replacement = '${1}$3';
        return preg_replace($pattern, $replacement, $valueString);
    }

    public function removeParentheses(string $valueString): string
    {
        $pattern = '/^\{?|\}?$/i';
        $replacement = '${1}$3';
        return preg_replace($pattern, $replacement, $valueString);
    }
}

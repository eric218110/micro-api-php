<?php

namespace Core\data\useCases\utils\strings;

use Core\domain\protocols\utils\strings\RemoveFirstAndLastBar;
use Core\domain\protocols\utils\strings\RemoveFirstAndLastParentheses;
use Core\domain\protocols\utils\strings\RemoveLastValueAfterBar;

class StringsUtil implements
    RemoveFirstAndLastBar,
    RemoveFirstAndLastParentheses,
    RemoveLastValueAfterBar
{
    public function remove(string $valueString): string
    {
        $pattern = '/^\/?|\/?$/i';
        $replacement = '${1}$3';
        return preg_replace($pattern, $replacement, $valueString);
    }

    public function removeBar(string $value): string
    {
        $explodeValue = explode('/', strrev($value));
        unset($explodeValue[0]);
        return strrev((implode('/', $explodeValue)));
    }

    public function removeParentheses(string $valueString): string
    {
        $pattern = '/^\{?|\}?$/i';
        $replacement = '${1}$3';
        return preg_replace($pattern, $replacement, $valueString);
    }
}

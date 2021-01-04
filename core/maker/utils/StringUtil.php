<?php

namespace Core\maker\utils;

class StringUtil
{
    public static function removeFirstAndLastBar(string $valueString): string
    {
        $pattern = '/^\/?|\/?$/i';
        $replacement = '${1}$3';
        return preg_replace($pattern, $replacement, $valueString);
    }
}

<?php

namespace Core\domain\protocols\utils\strings;

interface RemoveFirstAndLastParentheses
{
    public function removeParentheses(string $valueString);
}

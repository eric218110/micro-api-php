<?php


namespace Core\domain\protocols\utils\strings;


interface RemoveLastValueAfterBar
{
    public function removeBar(string $value): string;
}
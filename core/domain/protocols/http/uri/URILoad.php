<?php

namespace Core\domain\protocols\http\uri;

interface URILoad
{
    public function loadURI(): string;
}

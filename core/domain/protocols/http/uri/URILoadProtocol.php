<?php

namespace Core\domain\protocols\http\uri;

interface URILoadProtocol
{
    public function loadURI(): string;
}

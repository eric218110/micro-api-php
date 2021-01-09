<?php

namespace Core\domain\uri;

interface URILoadProtocol
{
    public function loadURI(): string;
}

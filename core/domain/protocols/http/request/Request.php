<?php


namespace Core\domain\protocols\http\request;

use stdClass;

interface Request
{
    public function getBody(): ?stdClass;

    public function setBody(?stdClass $body): void;

    public function getQuery(): ?stdClass;

    public function setQuery(?stdClass $query): void;

    public function getParams(): ?stdClass;

    public function setParams(?stdClass $params): void;

    public function getClientIp(): string;

    public function setClientIp($clientIp): void;

    public function getArgs(): ?stdClass;

    public function setArgs(array $args): void;

    public function getHeaders(): ?stdClass;

    public function setHeaders(stdClass $headers): void;
}
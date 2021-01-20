<?php


namespace Core\domain\protocols\http\request;

use stdClass;

interface Request
{
    public function getBody(): stdClass;

    public function setBody(stdClass $body): void;

    public function getQuery(): stdClass;

    public function setQuery($query): void;

    public function getParams(): stdClass;

    public function setParams($params): void;

    public function getClientIp(): string;

    public function setClientIp($clientIp): void;
}
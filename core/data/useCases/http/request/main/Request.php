<?php


namespace Core\data\useCases\http\request\main;

use stdClass;
use Core\domain\protocols\http\request\Request as RequestProtocols;

class Request implements RequestProtocols
{
    private $body;
    private $query;
    private $params;
    private $clientIp;

    public function getBody(): ?stdClass
    {
        return $this->body;
    }

    public function setBody(?stdClass $body): void
    {
        $this->body = $body;
    }

    public function getQuery(): stdClass
    {
        return $this->query;
    }

    public function setQuery(?stdClass $query): void
    {
        $this->query = $query;
    }

    public function getParams(): stdClass
    {
        return $this->params;
    }

    public function setParams(?stdClass $params): void
    {
        $this->params = $params;
    }

    public function getClientIp(): string
    {
        return $this->clientIp;
    }

    public function setClientIp($clientIp): void
    {
        $this->clientIp = $clientIp;
    }
}
<?php


namespace Core\data\useCases\http\request\main;


use Core\domain\protocols\http\request\create\CreateRequest;
use Core\domain\protocols\http\request\load\LoadRequest;
use stdClass;

class Request
{
    private $body;
    private $query;
    private $params;
    private $clientIp;

    public function getBody(): stdClass
    {
        return $this->body;
    }

    public function setBody(stdClass $body): void
    {
        $this->body = $body;
    }

    public function getQuery(): stdClass
    {
        return $this->query;
    }

    public function setQuery($query): void
    {
        $this->query = $query;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function setParams($params): void
    {
        $this->params = $params;
    }

    public function getClientIp()
    {
        return $this->clientIp;
    }

    public function setClientIp($clientIp): void
    {
        $this->clientIp = $clientIp;
    }
}
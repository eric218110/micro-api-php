<?php


namespace Core\data\useCases\http\request\create;

use Core\data\useCases\http\request\create\traits\CreateBodyRequest;
use Core\domain\protocols\http\request\create\CreateRequest as CreateRequestDomain;
use Core\domain\protocols\server\php\contents\ServerPHPGetContents;
use stdClass;

class CreateRequest implements CreateRequestDomain {

    use CreateBodyRequest;

    private $serverPHPGetContents;

    public function __construct(ServerPHPGetContents $serverPHPGetContents)
    {
        $this->serverPHPGetContents = $serverPHPGetContents;
    }

    public function loadClientIp(): string
    {
        // TODO: Implement loadClientIp() method.
    }

    public function loadParams(): string
    {
        // TODO: Implement loadParams() method.
    }

    public function loadQuery(): stdClass
    {
        // TODO: Implement loadQuery() method.
    }
}
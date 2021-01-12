<?php


namespace Core\data\useCases\http\request\create;

use Core\data\useCases\http\request\create\traits\CreateBodyRequest;
use Core\data\useCases\http\request\create\traits\LoadClientIPRequest;
use Core\domain\protocols\http\request\create\CreateRequest as CreateRequestDomain;
use Core\domain\protocols\server\http\load\ServerHTTPLoadClientIP;
use Core\domain\protocols\server\http\load\ServerHTTPLoadRemoteAddress;
use Core\domain\protocols\server\http\load\ServerHTTPLoadXForwarder;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateClientIP;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateRemoteAddress;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateXForwarder;
use Core\domain\protocols\server\php\contents\ServerPHPGetContents;
use stdClass;

class CreateRequest implements CreateRequestDomain {

    use CreateBodyRequest;
    use LoadClientIPRequest;

    private $serverPHPGetContents;
    private $serverHTTPLoadClientIP;
    private $serverHTTPLoadRemoteAddress;
    private $serverHTTPLoadXForwarder;
    private $serverHTTPValidateClientIP;
    private $serverHTTPValidateRemoteAddress;
    private $serverHTTPValidateXForwarder;

    public function __construct(
        ServerPHPGetContents $serverPHPGetContents,
        ServerHTTPLoadClientIP $serverHTTPLoadClientIP,
        ServerHTTPLoadRemoteAddress $serverHTTPLoadRemoteAddress,
        ServerHTTPLoadXForwarder $serverHTTPLoadXForwarder,
        ServerHTTPValidateClientIP $serverHTTPValidateClientIP,
        ServerHTTPValidateRemoteAddress $serverHTTPValidateRemoteAddress,
        ServerHTTPValidateXForwarder $serverHTTPValidateXForwarder
    )
    {
        $this->serverPHPGetContents = $serverPHPGetContents;
        $this->serverHTTPLoadClientIP = $serverHTTPLoadClientIP;
        $this->serverHTTPLoadRemoteAddress = $serverHTTPLoadRemoteAddress;
        $this->serverHTTPLoadXForwarder = $serverHTTPLoadXForwarder;
        $this->serverHTTPValidateClientIP = $serverHTTPValidateClientIP;
        $this->serverHTTPValidateRemoteAddress = $serverHTTPValidateRemoteAddress;
        $this->serverHTTPValidateXForwarder = $serverHTTPValidateXForwarder;
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
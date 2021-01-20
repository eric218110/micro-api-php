<?php


namespace Core\data\useCases\http\request\create;

use Core\data\useCases\http\request\create\traits\CreateClientIpTrait;
use Core\data\useCases\http\request\create\traits\CreateParamsTrait;
use Core\data\useCases\http\request\create\traits\CreateQueryTrait;
use Core\domain\protocols\server\http\load\ServerHTTPLoadClientIP;
use Core\domain\protocols\server\http\load\ServerHTTPLoadRemoteAddress;
use Core\domain\protocols\server\http\load\ServerHTTPLoadXForwarder;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateClientIP;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateRemoteAddress;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateXForwarder;
use Core\data\useCases\http\request\create\traits\CreateBodyTrait;
use Core\domain\protocols\http\request\Request;
use Core\domain\protocols\http\request\create\CreateRequest as CreateRequestProtocols;
use Core\domain\protocols\server\php\contents\ServerPHPGetContents;
use Core\domain\routes\load\LoadRoutes;

class CreateRequest implements CreateRequestProtocols
{
    use CreateBodyTrait;
    use CreateClientIpTrait;
    use CreateQueryTrait;

    private $request;
    private $serverPHPGetContents;
    private $serverHTTPValidateClientIP;
    private $serverHTTPValidateXForwarder;
    private $serverHTTPValidateRemoteAddress;
    private $serverHTTPLoadClientIP;
    private $serverHTTPLoadXForwarder;
    private $serverHTTPLoadRemoteAddress;
    private $loadRoutes;

    public function __construct(
        Request $request,
        ServerPHPGetContents $serverPHPGetContents,
        ServerHTTPValidateClientIP $serverHTTPValidateClientIP,
        ServerHTTPValidateXForwarder $serverHTTPValidateXForwarder,
        ServerHTTPValidateRemoteAddress $serverHTTPValidateRemoteAddress,
        ServerHTTPLoadClientIP $serverHTTPLoadClientIP,
        ServerHTTPLoadXForwarder $serverHTTPLoadXForwarder,
        ServerHTTPLoadRemoteAddress $serverHTTPLoadRemoteAddress,
        LoadRoutes $loadRoutes
    )
    {
        $this->request = $request;
        $this->serverPHPGetContents = $serverPHPGetContents;
        $this->serverHTTPValidateClientIP = $serverHTTPValidateClientIP;
        $this->serverHTTPValidateXForwarder = $serverHTTPValidateXForwarder;
        $this->serverHTTPValidateRemoteAddress = $serverHTTPValidateRemoteAddress;
        $this->serverHTTPLoadClientIP = $serverHTTPLoadClientIP;
        $this->serverHTTPLoadXForwarder = $serverHTTPLoadXForwarder;
        $this->serverHTTPLoadRemoteAddress = $serverHTTPLoadRemoteAddress;
        $this->loadRoutes = $loadRoutes;
    }

    public function createBodyQueryClientIpParamsInRequest(): void
    {
        // TODO: Implement createBodyQueryClientIpParamsInRequest() method.
    }

    public function createParamsRequest(): void
    {
       $path = $this->loadRoutes->loadPathRoute();
       var_dump($path);
    }
}
<?php


namespace Core\data\useCases\http\request\create;

use Core\data\useCases\http\request\create\traits\CreateBodyTrait;
use Core\data\useCases\http\request\create\traits\CreateClientIpTrait;
use Core\data\useCases\http\request\create\traits\CreateParamsTrait;
use Core\data\useCases\http\request\create\traits\CreateQueryTrait;
use Core\domain\protocols\http\request\create\CreateRequest;
use Core\domain\protocols\http\request\Request;
use Core\domain\protocols\http\uri\URILoad;
use Core\domain\protocols\server\http\load\ServerHTTPLoadClientIP;
use Core\domain\protocols\server\http\load\ServerHTTPLoadRemoteAddress;
use Core\domain\protocols\server\http\load\ServerHTTPLoadXForwarder;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateClientIP;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateRemoteAddress;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateXForwarder;
use Core\domain\protocols\server\php\contents\ServerPHPGetContents;
use Core\domain\protocols\server\request\ServerRequestBaseName;
use Core\domain\protocols\utils\strings\RemoveFirstAndLastParentheses;

class RequestCreate implements CreateRequest
{
    use CreateBodyTrait;
    use CreateClientIpTrait;
    use CreateQueryTrait;
    use CreateParamsTrait;

    private $request;
    private $serverPHPGetContents;
    private $serverHTTPValidateClientIP;
    private $serverHTTPValidateXForwarder;
    private $serverHTTPValidateRemoteAddress;
    private $serverHTTPLoadClientIP;
    private $serverHTTPLoadXForwarder;
    private $serverHTTPLoadRemoteAddress;
    private $serverRequestBaseName;
    private $uriLoad;
    private $removeFirstAndLastParentheses;

    public function __construct(
        Request $request,
        ServerPHPGetContents $serverPHPGetContents,
        ServerHTTPValidateClientIP $serverHTTPValidateClientIP,
        ServerHTTPValidateXForwarder $serverHTTPValidateXForwarder,
        ServerHTTPValidateRemoteAddress $serverHTTPValidateRemoteAddress,
        ServerHTTPLoadClientIP $serverHTTPLoadClientIP,
        ServerHTTPLoadXForwarder $serverHTTPLoadXForwarder,
        ServerHTTPLoadRemoteAddress $serverHTTPLoadRemoteAddress,
        ServerRequestBaseName $serverRequestBaseName,
        URILoad $uriLoad,
        RemoveFirstAndLastParentheses $removeFirstAndLastParentheses
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
        $this->serverRequestBaseName = $serverRequestBaseName;
        $this->uriLoad = $uriLoad;
        $this->removeFirstAndLastParentheses = $removeFirstAndLastParentheses;
    }

    public function createBodyQueryClientIpParamsInRequest(string $path): void
    {
        $this->createBody();
        $this->createClientIp();
        $this->createParamsRequest($path);
        $this->createQueryRequest();
    }

}
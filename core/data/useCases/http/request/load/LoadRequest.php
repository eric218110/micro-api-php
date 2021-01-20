<?php


namespace Core\data\useCases\http\request\load;

use Core\data\useCases\http\request\load\traits\CreateBodyRequest;
use Core\data\useCases\http\request\load\traits\LoadClientIPRequest;
use Core\data\useCases\http\request\load\traits\LoadParamsRequest;
use Core\data\useCases\http\request\load\traits\LoadQueryRequest;
use Core\domain\protocols\http\request\load\LoadRequest as LoadRequestProtocols;
use Core\domain\protocols\server\http\load\ServerHTTPLoadClientIP;
use Core\domain\protocols\server\http\load\ServerHTTPLoadRemoteAddress;
use Core\domain\protocols\server\http\load\ServerHTTPLoadXForwarder;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateClientIP;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateRemoteAddress;
use Core\domain\protocols\server\http\validate\ServerHTTPValidateXForwarder;
use Core\domain\protocols\server\php\contents\ServerPHPGetContents;
use Core\domain\protocols\http\uri\URILoad;
use Core\domain\protocols\server\request\ServerRequestBaseName;
use Core\domain\protocols\utils\strings\RemoveFirstAndLastParentheses;
use Core\domain\routes\load\LoadPathRoute;


class LoadRequest implements LoadRequestProtocols
{

    use CreateBodyRequest;
    use LoadClientIPRequest;
    use LoadParamsRequest;
    use LoadQueryRequest;

    private $serverPHPGetContents;
    private $serverHTTPLoadClientIP;
    private $serverHTTPLoadRemoteAddress;
    private $serverHTTPLoadXForwarder;
    private $serverHTTPValidateClientIP;
    private $serverHTTPValidateRemoteAddress;
    private $serverHTTPValidateXForwarder;
    private $loadPathsRouter;
    private $uriLoad;
    private $removeFirstAndLastParentheses;
    private $serverRequestBaseName;

    public function __construct(
        ServerPHPGetContents $serverPHPGetContents,
        ServerHTTPLoadClientIP $serverHTTPLoadClientIP,
        ServerHTTPLoadRemoteAddress $serverHTTPLoadRemoteAddress,
        ServerHTTPLoadXForwarder $serverHTTPLoadXForwarder,
        ServerHTTPValidateClientIP $serverHTTPValidateClientIP,
        ServerHTTPValidateRemoteAddress $serverHTTPValidateRemoteAddress,
        ServerHTTPValidateXForwarder $serverHTTPValidateXForwarder,
        LoadPathRoute $loadPathsRouter,
        URILoad $uriLoad,
        RemoveFirstAndLastParentheses $removeFirstAndLastParentheses,
        ServerRequestBaseName $serverRequestBaseName
    )
    {
        $this->serverPHPGetContents = $serverPHPGetContents;
        $this->serverHTTPLoadClientIP = $serverHTTPLoadClientIP;
        $this->serverHTTPLoadRemoteAddress = $serverHTTPLoadRemoteAddress;
        $this->serverHTTPLoadXForwarder = $serverHTTPLoadXForwarder;
        $this->serverHTTPValidateClientIP = $serverHTTPValidateClientIP;
        $this->serverHTTPValidateRemoteAddress = $serverHTTPValidateRemoteAddress;
        $this->serverHTTPValidateXForwarder = $serverHTTPValidateXForwarder;
        $this->loadPathsRouter = $loadPathsRouter;
        $this->uriLoad = $uriLoad;
        $this->removeFirstAndLastParentheses = $removeFirstAndLastParentheses;
        $this->serverRequestBaseName = $serverRequestBaseName;
    }
}
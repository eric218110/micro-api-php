<?php


namespace Core\main\factories\http\request\create;

use Core\data\useCases\http\request\create\RequestCreate;
use Core\data\useCases\server\apache\header\ApacheServer;
use Core\data\useCases\server\http\load\ServerHTTPLoad;
use Core\data\useCases\server\http\validate\ServerHTTPValidate;
use Core\data\useCases\server\php\contents\PHPServer;
use Core\data\useCases\server\request\ServerRequest;
use Core\data\useCases\utils\strings\StringsUtil;
use Core\domain\protocols\http\request\create\CreateRequest as CreateRequestProtocol;
use Core\main\factories\http\request\FactoryRequest;
use Core\main\factories\http\uri\FactoryURI;
use Core\main\factories\protocols\FactoryMachine;

class FactoryCreateRequest extends FactoryMachine
{
    private $request;
    private $serverPHPGetContents;
    private $serverHTTPLoad;
    private $serverHTTPValidate;
    private $serverRequestBaseName;
    private $uriLoad;
    private $removeFirstAndLastParentheses;
    private $serverApacheLoadHeadersRequest;

    public function __construct()
    {
        $this->request = FactoryRequest::getInstance();
        $this->serverPHPGetContents = new PHPServer();
        $this->serverHTTPLoad = new ServerHTTPLoad();
        $this->serverHTTPValidate = new ServerHTTPValidate(
            $this->serverHTTPLoad,
            $this->serverHTTPLoad,
            $this->serverHTTPLoad
        );
        $this->serverRequestBaseName = new ServerRequest();
        $this->uriLoad = (new FactoryURI())->maker();
        $this->removeFirstAndLastParentheses = new StringsUtil();
        $this->serverApacheLoadHeadersRequest = new ApacheServer();
    }

    public function maker(): CreateRequestProtocol
    {
        return new RequestCreate(
            $this->request,
            $this->serverPHPGetContents,
            $this->serverHTTPValidate,
            $this->serverHTTPValidate,
            $this->serverHTTPValidate,
            $this->serverHTTPLoad,
            $this->serverHTTPLoad,
            $this->serverHTTPLoad,
            $this->serverRequestBaseName,
            $this->uriLoad,
            $this->removeFirstAndLastParentheses,
            $this->serverApacheLoadHeadersRequest
        );
    }
}
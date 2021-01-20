<?php


namespace Core\main\factories\http\request\create;

use Core\data\useCases\server\http\load\ServerHTTPLoad;
use Core\data\useCases\server\http\validate\ServerHTTPValidate;
use Core\data\useCases\server\php\contents\PHPServer;
use Core\domain\protocols\http\request\create\CreateRequest as CreateRequestProtocol;
use Core\data\useCases\http\request\create\CreateRequest as CreateRequestData;
use Core\main\factories\http\request\FactoryRequest;
use Core\main\factories\path\FactoryPath;
use Core\main\factories\protocols\FactoryMachine;
use Core\main\factories\router\FactoryRouter;

class FactoryCreateRequest extends FactoryMachine
{
    private $request;
    private $serverPHPGetContents;
    private $serverHTTPLoad;
    private $serverHTTPValidate;
    private $route;

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
        $this->route = FactoryRouter::getInstance();
    }

    public function maker(): CreateRequestProtocol
    {
        return new CreateRequestData (
            $this->request,
            $this->serverPHPGetContents,
            $this->serverHTTPValidate,
            $this->serverHTTPValidate,
            $this->serverHTTPValidate,
            $this->serverHTTPLoad,
            $this->serverHTTPLoad,
            $this->serverHTTPLoad,
            $this->route
        );
    }
}
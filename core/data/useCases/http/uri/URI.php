<?php

namespace Core\data\useCases\http\uri;

use Core\domain\protocols\http\uri\URILoad;
use Core\domain\protocols\server\request\ServerRequestURI;
use Core\domain\protocols\utils\path\RootDir;
use Core\domain\protocols\utils\strings\RemoveFirstAndLastBar;

class URI implements URILoad
{

    private $stringUtil;
    private $path;
    private $serverRequest;

    public function __construct(
        RemoveFirstAndLastBar $stringUtil,
        RootDir $path,
        ServerRequestURI $serverRequest
    )
    {
        $this->stringUtil = $stringUtil;
        $this->path = $path;
        $this->serverRequest = $serverRequest;
    }

    public function loadURI(): string
    {
        $uri = $this->loadUriExact();
        if ($this->path->isRootDir()) return substr($this->serverRequest->loadRequestURI(), 0, 1);
        return $this->stringUtil->remove($uri);
    }

    private function loadUriExact(): string
    {
        $extensionPhp = 'index.php';

        $uri = $this->serverRequest->loadRequestURI();

        if (strpos($uri, $extensionPhp)) {
            $parse = explode($extensionPhp, $uri);
            if ($parse[1] === '/' || $parse[1] === '') return substr($this->serverRequest->loadRequestURI(), 0, 1);
            return $parse[1];
        }
        return $uri;
    }
}

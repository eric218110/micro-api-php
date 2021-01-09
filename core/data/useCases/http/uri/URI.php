<?php

namespace Core\data\useCases\http\uri;

use Core\domain\protocols\http\uri\URILoadProtocol;
use Core\maker\server\Server as ServerAlias;
use Core\maker\utils\StringUtil;
use Core\utils\path\Path;

use Core\domain\protocols\utils\path\RootDir;
use Core\domain\protocols\utils\strings\RemoveFirstAndLastBar;
use Core\domain\protocols\server\request\ServerRequestURI;

class URI implements URILoadProtocol
{

    private $stringUtil;
    private $path;
    private $serverRequest;
    private $homeRootDirectory;

    public function __construct($stringUtil, $path, $serverRequest)
    {
        $this->stringUtil = $stringUtil;
        $this->path = $path;
        $this->serverRequest = $serverRequest;
        $this->homeRootDirectory = '/';
    }

    public function loadURI(): string
    {
        $uri = $this->loadUriExact();
        if (Path::isRootDir()) return $this->homeRootDirectory;
        return $this->stringUtil->remove($uri);
    }

    private function loadUriExact(): string
    {
        $extensionPhp = 'index.php';

        $uri = $this->serverRequest->loadRequestURI();

        if (strpos($uri, $extensionPhp)) {
            $parse = explode($extensionPhp, $uri);
            if ($parse[1] === '/' || $parse[1] === '') return $this->homeRootDirectory;
            return $parse[1];
        }
        return $uri;
    }
}

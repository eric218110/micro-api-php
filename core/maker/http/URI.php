<?php

namespace Core\maker\http;

use Core\maker\http\protocols\URIProtocols;
use Core\maker\server\Server;
use Core\maker\utils\StringUtil;
use Core\utils\path\Path;

class URI implements URIProtocols
{
    private $isHomeURI = '/';
    public function loadUri(): string
    {
        $onlyValidURI = $this->makerUri();
        return StringUtil::removeFirstAndLastBar($onlyValidURI);
    }

    private function makerUri(): string
    {
        $uri = $this->loadUriExact();
        if (Path::isRootDir()) return $this->isHomeURI;
        return $uri;
    }

    private function loadUriExact(): string
    {
        $extensionFileDotPhp = 'index.php';
        $uri = Server::loadRequestURIFromServer();
        if (strpos($uri, $extensionFileDotPhp)) {
            $parse = explode($extensionFileDotPhp, $uri);
            if ($parse[1] === '/' || $parse[1] === '') return $this->isHomeURI;
            return $parse[1];
        }
        return $uri;
    }
}

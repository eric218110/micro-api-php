<?php


namespace Core\main\factories\uri;

use Core\data\useCases\http\uri\URI;
use Core\data\useCases\server\request\ServerRequest;
use Core\data\useCases\utils\strings\StringsUtil;
use Core\main\factories\path\FactoryPath;
use Core\main\factories\protocols\FactoryMachine;


class FactoryURI extends FactoryMachine
{
    public function maker(): URI
    {
        $stringUtil = new StringsUtil();
        $path = new FactoryPath();
        $server = new ServerRequest();

        return new URI($stringUtil, $path->maker(), $server);
    }
}
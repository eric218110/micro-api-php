<?php

namespace Core\main\factories\path;

use Core\data\useCases\server\request\ServerRequest;
use Core\data\useCases\utils\path\Path;
use Core\data\useCases\utils\strings\StringsUtil;
use Core\main\factories\protocols\FactoryMachine;

class FactoryPath extends FactoryMachine
{

    private $stringsUtils;
    private $serverRequest;

    public function __construct()

    {
        $this->stringsUtils = new StringsUtil();
        $this->serverRequest = new ServerRequest();
    }

    public function maker(): Path
    {
        return new Path($this->serverRequest, $this->serverRequest, $this->stringsUtils);
    }

}
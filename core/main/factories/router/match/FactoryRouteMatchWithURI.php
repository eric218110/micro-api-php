<?php


namespace Core\main\factories\router\match;

use Core\data\routes\match\MatchRouteWithURI;
use Core\data\useCases\utils\strings\StringsUtil;
use Core\domain\routes\match\RouteMatchWithURI;
use Core\main\factories\http\uri\FactoryURI;
use Core\main\factories\protocols\FactoryMachine;

class FactoryRouteMatchWithURI extends FactoryMachine
{

    private $uriLoad;
    private $removeFirstAndLastBar;
    private $removeLastValueAfterBar;

    public function __construct()
    {
        $stringUtil = new StringsUtil();
        $this->uriLoad = (new FactoryURI())->maker();
        $this->removeFirstAndLastBar = $stringUtil;
        $this->removeLastValueAfterBar = $stringUtil;
    }

    public function maker(): RouteMatchWithURI
    {
        return new MatchRouteWithURI(
            $this->uriLoad,
            $this->removeFirstAndLastBar,
            $this->removeFirstAndLastBar
        );
    }
}
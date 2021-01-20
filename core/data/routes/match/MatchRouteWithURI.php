<?php


namespace Core\data\routes\match;

use Core\domain\protocols\http\uri\URILoad;
use Core\domain\protocols\utils\strings\RemoveFirstAndLastBar;
use Core\domain\protocols\utils\strings\RemoveLastValueAfterBar;
use Core\domain\routes\match\RouteMatchWithURI;

class MatchRouteWithURI implements RouteMatchWithURI
{

    private $uriLoad;
    private $removeFirstAndLastBar;
    private $removeLastValueAfterBar;
    private $uriWithoutFirstAndLastBar;

    public function __construct(
        URILoad $uriLoad,
        RemoveFirstAndLastBar $removeFirstAndLastBar,
        RemoveLastValueAfterBar $removeLastValueAfterBar)
    {
        $this->uriLoad = $uriLoad;
        $this->removeFirstAndLastBar = $removeFirstAndLastBar;
        $this->removeLastValueAfterBar = $removeLastValueAfterBar;
        $this->uriWithoutFirstAndLastBar = $this->removeFirstAndLastBar->remove($this->uriLoad->loadURI());
    }

    public function matchRouteWithURI(string $path): bool
    {

        if (strpos($path, '{') !== false) {
            return
                $this->removeLastValueAfterBar->removeBar($this->uriWithoutFirstAndLastBar) ===
                $this->removeLastValueAfterBar->removeBar($this->removeFirstAndLastBar->remove($path));
        }

        return $this->uriWithoutFirstAndLastBar === $this->removeFirstAndLastBar->remove($path);
    }
}
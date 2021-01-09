<?php

namespace Core\data\utils\path;

use Core\domain\server\request\ServerRequestHostName;
use Core\domain\server\request\ServerRequestURI;
use Core\domain\utils\path\BaseFolder;
use Core\domain\utils\path\BasePath;
use Core\domain\utils\path\RootDir;
use Core\domain\utils\path\RouterPath;
use Core\domain\utils\strings\RemoveFirstAndLastBar;

class Path implements BaseFolder, BasePath, RootDir, RouterPath
{

    private $serverHostname;
    private $serverRequest;
    private $stringUtil;

    public function __construct(
        ServerRequestHostName $serverHostname,
        ServerRequestURI $serverRequest,
        RemoveFirstAndLastBar $stringUtil
    ) {
        $this->serverHostname = $serverHostname;
        $this->serverRequest = $serverRequest;
        $this->stringUtil = $stringUtil;
    }

    public function loadIndexFolder(): string
    {
        $baseDir = $this->loadIndexPath();
        $explodeDir = explode('/', $baseDir);
        return end($explodeDir);
    }

    public function loadIndexPath(): string
    {
        return getcwd();
    }

    public function loadRoutePath(): string
    {
        $pathRoutes = '/src/main/routes/routes.php';
        return $this->loadIndexPath() . $pathRoutes;
    }

    public function isRootDir(): bool
    {
        $usingPort = ':';
        $hostname = $this->serverHostname->loadHostname();
        $uri = $this->stringUtil->remove($this->serverRequest->loadRequestURI());

        if (strpos($hostname, $usingPort)) {
            $hostname = explode($usingPort, $hostname)[0];
        }

        if ($uri === '') return true;
        if ($hostname === $this->loadIndexFolder) return true;
        if ($uri == $this->loadIndexFolder) return true;

        return false;
    }
}

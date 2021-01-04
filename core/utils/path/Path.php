<?php

namespace Core\utils\path;

use Core\maker\server\Server;
use Core\maker\utils\StringUtil;

class Path
{

    public static function loadBaseIndexPath()
    {
        return getcwd();
    }

    public static function loadRoutesPath()
    {
        $pathRoutes = '/src/main/routes/routes.php';
        return self::loadBaseIndexPath() . $pathRoutes;
    }

    public static function loadBaseFolder()
    {
        $baseDir = self::loadBaseIndexPath();
        $explodeDir = explode('/', $baseDir);
        return end($explodeDir);
    }

    public static function isRootDir()
    {
        $hostname = Server::loadHostname();
        $uri = StringUtil::removeFirstAndLastBar(parse_url(Server::loadRequestURI(), PHP_URL_PATH));

        if ($hostname === Path::loadBaseFolder()) return true;
        if ($uri == Path::loadBaseFolder()) return false;
    }
}

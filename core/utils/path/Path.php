<?php

namespace Core\utils\path;

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
}

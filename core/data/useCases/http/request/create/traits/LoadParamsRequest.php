<?php


namespace Core\data\useCases\http\request\create\traits;

use stdClass;
use Exception;

trait LoadParamsRequest
{
    public function loadParams(): stdClass
    {
        try {
            $routesContents = require_once $this->routePath->loadRoutePath();
            $charExploderRoutes = '{';

            foreach ($routesContents as $key => $routeContent) {
                if (strpos($key, $charExploderRoutes) !== false) {
                    $explodeInBars = '/';
                    $keyExploded = explode($explodeInBars, substr($key, 1));
                    $URIExploded = explode($explodeInBars, $this->uriLoad->loadURI());

                    if (count($keyExploded) === count($URIExploded)) {
                        foreach ($keyExploded as $index => $item) {
                            if (strpos($item, $charExploderRoutes) === false) {
                                if ($URIExploded[$index] !== $item) {
                                    return new stdClass();
                                }
                            } else {
                                $valueWithoutParentheses = $this->removeFirstAndLastParentheses->removeParentheses($item);
                                $stdObj = new stdClass();
                                $stdObj->$valueWithoutParentheses = $URIExploded[$index];
                                return $stdObj;
                            }
                        }
                    }
                }
            }

            return new stdClass();

        } catch (Exception $exception) {
            return new stdClass();
        }
    }
}
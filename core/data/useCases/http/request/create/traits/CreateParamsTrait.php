<?php


namespace Core\data\useCases\http\request\create\traits;


trait CreateParamsTrait
{
    public function createParamsRequest(string $routeName): void
    {
        $routesContents = $this->loadPathsRoute->loadPathRoute();
//            $charExploderRoutes = '{';
//
//            foreach ($routesContents as $key => $routeContent) {
//                if (strpos($key, $charExploderRoutes) !== false) {
//                    $explodeInBars = '/';
//                    $keyExploded = explode($explodeInBars, substr($key, 1));
//                    $URIExploded = explode($explodeInBars, $this->uriLoad->loadURI());
//
//                    if (count($keyExploded) === count($URIExploded)) {
//                        foreach ($keyExploded as $index => $item) {
//                            if (strpos($item, $charExploderRoutes) === false) {
//                                if ($URIExploded[$index] !== $item) {
//                                    return new stdClass();
//                                }
//                            } else {
//                                $valueWithoutParentheses = $this->removeFirstAndLastParentheses->removeParentheses($item);
//                                $stdObj = new stdClass();
//                                $stdObj->$valueWithoutParentheses = $URIExploded[$index];
//                                return $stdObj;
//                            }
//                        }
//                    }
//                }
//            }
//
//        return new stdClass();
    }
}
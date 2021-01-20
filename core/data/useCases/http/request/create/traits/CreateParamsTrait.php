<?php


namespace Core\data\useCases\http\request\create\traits;

use stdClass;

trait CreateParamsTrait
{
    public function createParamsRequest(string $routeName): void
    {
        {
            $charExploderRoutes = '{';

            if (strpos($routeName, $charExploderRoutes) !== false) {
                $explodeInBars = '/';
                $keyExploded = explode($explodeInBars, substr($routeName, 1));
                $URIExploded = explode($explodeInBars, $this->uriLoad->loadURI());

                if (count($keyExploded) === count($URIExploded)) {
                    foreach ($keyExploded as $index => $item) {
                        if (strpos($item, $charExploderRoutes) === false) {
                            if ($URIExploded[$index] !== $item) {
                                $this->request->setParams(new stdClass());
                            }
                        } else {
                            $valueWithoutParentheses = $this->removeFirstAndLastParentheses->removeParentheses($item);
                            $stdObj = new stdClass();
                            $stdObj->$valueWithoutParentheses = $URIExploded[$index];
                            $this->request->setParams($stdObj);
                        }
                    }
                }
            }
        }
    }
}
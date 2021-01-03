<?php

namespace Core\maker\http\traits;

// pegar os parametros do URI
// pegar a rota atual
// rota = ../user/{id}
// uri  = ../user/1
// retornar obj
// ...params->id = 1

trait Params
{
    public $params;

    public function loadParamsRequest(string $currentRoute): string
    {
        $uri = $this->loadCurrentURI();
        $value = $this->loadValueInRouteParams($currentRoute);
        return '';
    }

    private function loadCurrentURI(): string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    private function loadValueInRouteParams(string $routePath)
    {
        $charSepareteIdsRoutesParams = '{';
        $charExploderRoutesParams = '/';
        $explodeCurrentRoute = explode($charExploderRoutesParams, $routePath);

        foreach ($explodeCurrentRoute as $value) {
            if (strpos($value, $charSepareteIdsRoutesParams) !== false) {
                $valueWithoutFirstAndLastChar = substr((substr($value, 1)), 0, -1);
                return $valueWithoutFirstAndLastChar;
            }
        }
        return '';
    }
}

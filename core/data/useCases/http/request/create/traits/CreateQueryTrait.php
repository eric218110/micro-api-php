<?php


namespace Core\data\useCases\http\request\create\traits;

use stdClass;

trait CreateQueryTrait
{
    public function createQueryRequest(): void
    {
        $characterQuestionDot = "?";
        $baseNameFromURI = $this->serverRequestBaseName->loadBaseNameURI();

        $isQueryFormat = strpos($baseNameFromURI, $characterQuestionDot);

        $stdObject = new stdClass();

        if ($isQueryFormat) {
            $explodeURI = explode($characterQuestionDot, $baseNameFromURI);
            $queryValue = $explodeURI[1];
            $characterEquals = '=';
            $explodeQuery = explode($characterEquals, $queryValue);
            $key = $explodeQuery[0];
            $value = $explodeQuery[1];
            $stdObject->$key = $value;
        }

        $this->request->setQuery($stdObject);
    }
}
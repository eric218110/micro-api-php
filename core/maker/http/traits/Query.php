<?php

namespace Core\maker\http\traits;

use stdClass;

trait Query
{

    private $query = false;

    private function createQuery()
    {
        $characterQuerySeparete = "?";
        $baseNameFromURI = basename($_SERVER['REQUEST_URI']);
        $stdObject = new stdClass();
        $isQueryFormat = strpos($baseNameFromURI, $characterQuerySeparete);

        if ($isQueryFormat) {
            $explodeURI = explode($characterQuerySeparete, $baseNameFromURI);
            $key = $explodeURI[0];
            $value = $explodeURI[0];
            $stdObject->$key = $value;
        };

        $this->query = $stdObject;
        return $this->query;
    }

    public function loadQuery()
    {
        if ($this->query) return $this->query;
        return $this->createQuery();
    }
}

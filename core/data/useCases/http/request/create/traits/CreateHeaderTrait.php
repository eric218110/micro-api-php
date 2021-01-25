<?php


namespace Core\data\useCases\http\request\create\traits;

use stdClass;

trait CreateHeaderTrait
{
    public function createHeader(): void
    {
        $headerFormat = new stdClass();
        foreach ($this->serverApacheLoadHeadersRequest->loadHeaders() as $key => $value) {
            $keyFormat = trim(str_replace('-', '_', $key));
            $headerFormat->$keyFormat = $value;
        }
        $this->request->setHeaders($headerFormat);
    }
}
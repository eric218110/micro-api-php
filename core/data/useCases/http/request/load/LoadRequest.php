<?php


namespace Core\data\useCases\http\request\load;

use Core\data\useCases\http\request\load\traits\LoadArgsTrait;
use Core\data\useCases\http\request\load\traits\LoadBodyTrait;
use Core\data\useCases\http\request\load\traits\LoadClientIpTrait;
use Core\data\useCases\http\request\load\traits\LoadHeadersTrait;
use Core\data\useCases\http\request\load\traits\LoadParamsTrait;
use Core\data\useCases\http\request\load\traits\LoadQueryTrait;
use Core\domain\app\http\HttpRequest as LoadRequestProtocols;
use Core\domain\protocols\http\request\Request;


class LoadRequest implements LoadRequestProtocols
{
    use LoadBodyTrait;
    use LoadClientIpTrait;
    use LoadParamsTrait;
    use LoadQueryTrait;
    use LoadArgsTrait;
    use LoadHeadersTrait;

    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
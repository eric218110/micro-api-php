<?php


namespace Core\data\useCases\http\request\load;

use Core\domain\protocols\http\request\load\LoadRequest as LoadRequestProtocols;
use stdClass;


class LoadRequest implements LoadRequestProtocols
{
    public function loadBody(): stdClass
    {
        // TODO: Implement loadBody() method.
    }

    public function loadClientIp(): string
    {
        // TODO: Implement loadClientIp() method.
    }

    public function loadParams(): stdClass
    {
        // TODO: Implement loadParams() method.
    }

    public function loadQuery(): stdClass
    {
        // TODO: Implement loadQuery() method.
    }


}
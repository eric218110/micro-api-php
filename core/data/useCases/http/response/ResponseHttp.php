<?php


namespace Core\data\useCases\http\response;


use Core\domain\app\http\HttpResponse;

class ResponseHttp implements HttpResponse
{
    public function json(array $args): void
    {
        echo json_encode($args);
    }

}
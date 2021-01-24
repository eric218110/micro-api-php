<?php


namespace Src\presentation\protocols\http;


use Core\domain\app\http\HttpRequest;
use Core\domain\app\http\HttpResponse;

interface Controller
{
    public function handler(HttpRequest $httpRequest, HttpResponse $httpResponse): void;
}
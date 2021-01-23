<?php


namespace Src\presentation\protocols\http;


use Core\domain\app\HttpRequest;
use Core\domain\app\HttpResponse;

interface Controller
{
    public function handler(HttpRequest $httpRequest, HttpResponse $httpResponse): void;
}
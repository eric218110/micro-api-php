<?php


namespace Core\domain\app\controller;


use Core\domain\app\http\HttpRequest;
use Core\domain\app\http\HttpResponse;

interface ApplicationController
{
    public function handler(HttpRequest $httpRequest, HttpResponse $httpResponse): void;
}
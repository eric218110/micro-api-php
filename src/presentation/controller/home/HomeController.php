<?php


namespace Src\presentation\controller\home;


use Core\domain\app\http\HttpRequest;
use Core\domain\app\http\HttpResponse;
use Src\presentation\protocols\http\Controller;

class HomeController implements Controller
{
    public function handler(HttpRequest $httpRequest, HttpResponse $httpResponse): void
    {
        $httpResponse->json(array('hello' => 'word'));
    }
}
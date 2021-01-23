<?php


namespace Src\presentation\controller\home;


use Core\domain\app\HttpRequest;
use Core\domain\app\HttpResponse;
use Src\presentation\protocols\http\Controller;

class HomeController
{
    public function handler(): void
    {
        echo 'Home Controller';
    }

}
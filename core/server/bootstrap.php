<?php

use Core\maker\http\Request;

try {
    $request = Request::createRequest();
    var_dump($request);
} catch (\Throwable $th) {
    //throw $th;
}

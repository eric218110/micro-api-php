<?php

use Core\maker\http\Request;

try {
    $request = new Request();
} catch (\Throwable $th) {
    //throw $th;
}

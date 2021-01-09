<?php

use Core\data\server\request\ServerRequest;
use Core\data\utils\path\Path;
use Core\data\utils\strings\StringsUtil;

$stringUtils = new StringsUtil();
$server = new ServerRequest();

$path = new Path($server, $server, $stringUtils);

<?php

use Core\main\factories\path\FactoryPath;

$instancePath = new FactoryPath();

$path = $instancePath->maker();

var_dump($path->loadIndexFolder());
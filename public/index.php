<?php

use App\Autoloader;
use App\Ctrl\RecetteCtrl;

require '../app/Autoloader.php';

Autoloader::register();

$test = new RecetteCtrl(\App\App::getInstance()->getDb());

$test->index();

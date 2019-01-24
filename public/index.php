<?php

# IMPORTANT This file is automatically updated, don't edit

use Manadev\Core\App;
use Manadev\Framework\Http\Module;

$dir = __DIR__;
require $dir . '/../vendor/autoload.php';
require $dir . '/../bootstrap.php';

App::runApp('http', [
    'base_path' => realpath($dir . '/../'),
    'env' => Module::detectEnv(),
]);

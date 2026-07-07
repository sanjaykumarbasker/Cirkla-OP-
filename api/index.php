<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$compiledViewPath = getenv('VIEW_COMPILED_PATH') ?: sys_get_temp_dir().'/views';

if (! is_dir($compiledViewPath)) {
    mkdir($compiledViewPath, 0777, true);
}

putenv("VIEW_COMPILED_PATH={$compiledViewPath}");
$_ENV['VIEW_COMPILED_PATH'] = $compiledViewPath;
$_SERVER['VIEW_COMPILED_PATH'] = $compiledViewPath;

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());

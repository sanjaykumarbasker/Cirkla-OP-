<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$tempPath = sys_get_temp_dir();
$compiledViewPath = getenv('VIEW_COMPILED_PATH') ?: $tempPath.'/views';

if (! is_dir($compiledViewPath)) {
    mkdir($compiledViewPath, 0777, true);
}

$cachePaths = [
    'VIEW_COMPILED_PATH' => $compiledViewPath,
    'APP_CONFIG_CACHE' => $tempPath.'/config.php',
    'APP_EVENTS_CACHE' => $tempPath.'/events.php',
    'APP_PACKAGES_CACHE' => $tempPath.'/packages.php',
    'APP_ROUTES_CACHE' => $tempPath.'/routes.php',
    'APP_SERVICES_CACHE' => $tempPath.'/services.php',
];

foreach ($cachePaths as $key => $path) {
    putenv("{$key}={$path}");
    $_ENV[$key] = $path;
    $_SERVER[$key] = $path;
}

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());

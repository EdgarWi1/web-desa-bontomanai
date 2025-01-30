<?php

define('LARAVEL_START', microtime(true));

// Load Composer's autoloader
require __DIR__.'/../vendor/autoload.php';

// Load Laravel's bootstrap file
$app = require_once __DIR__.'/../bootstrap/app.php';

// Create the application kernel and handle the request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();
$kernel->terminate($request, $response);

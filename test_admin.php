<?php
require __DIR__ . '/vendor/autoload.php';

use App\Http\Middleware\Admin;

$middleware = new Admin();
echo get_class($middleware); // Should output: App\Http\Middleware\Admin
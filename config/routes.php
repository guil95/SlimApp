<?php
$app->get('/', \App\Controllers\HomeController::class . ':home')->add(new \App\Middleware\MyMiddleware());

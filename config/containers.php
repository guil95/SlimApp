<?php
$container = $app->getContainer();

$container[\App\Services\MyService::class] = function ($container) {
    $myService = new \App\Services\MyService();
    return $myService;
};
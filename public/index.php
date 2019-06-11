<?php
require '../vendor/autoload.php';

$app = new \App\Application([
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true,
    ]
]);

$app->setUp()->run();

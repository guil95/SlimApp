<?php
require '../vendor/autoload.php';

$app = new \App\Application([
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true,
        'db' => [
            'driver'    => 'pdo_mysql',
            'charset'   => 'utf8',
            'host'      => 'db',
            'port'      =>  3306,
            'dbname'    => 'baseslimapp',
            'user'      => 'root',
            'pass'      => 'root'
        ]
    ]
]);

$app->setUp()->run();

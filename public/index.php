<?php
require '../vendor/autoload.php';

$app = new \App\Application([
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true,
        'db' => [
            'driver'    => 'pdo_mysql',
            'charset'   => 'utf8',
            'host'      => '127.0.0.1',
            'port'      =>  3306,
            'dbname'    => 'db_name',
            'user'      => 'user',
            'password'  => 'password'
        ]
    ]
]);

$app->setUp()->run();

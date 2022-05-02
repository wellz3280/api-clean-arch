<?php
    declare(strict_types=1);

use Slim\Factory\AppFactory;

require __DIR__.'/../vendor/autoload.php';

$app = AppFactory::create();

$routes = require __DIR__.'/../config/routes.php';
$routes($app);

$app->run();
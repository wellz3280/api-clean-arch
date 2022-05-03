<?php
    declare(strict_types=1);

use DI\Container;
use Slim\Factory\AppFactory;

require __DIR__.'/../vendor/autoload.php';

$container = new Container();
AppFactory::setContainer($container);

$setting = require __DIR__.'/../config/settings.php';
$setting($container);

$app = AppFactory::create();

$routes = require __DIR__.'/../config/routes.php';
$routes($app);

$app->run();
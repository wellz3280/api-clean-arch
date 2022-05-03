<?php
    declare(strict_types=1);

use Slim\App;
use Teste\Application\Controllers\FindUserController;
use Teste\Application\Controllers\HomeController;
use Teste\Application\Controllers\ListUserController;

return function(App $app){
    
    $app->get('/',HomeController::class.':index');
    $app->get('/user',ListUserController::class.':index');
    $app->get('/user/{id}',FindUserController::class.':index');
};
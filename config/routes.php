<?php
    declare(strict_types=1);

use Slim\App;
use Teste\Application\Controllers\FilterPetController;
use Teste\Application\Controllers\FilterUserController;
use Teste\Application\Controllers\FindPetController;
use Teste\Application\Controllers\FindUserController;
use Teste\Application\Controllers\HomeController;
use Teste\Application\Controllers\ListPetController;
use Teste\Application\Controllers\ListUserController;

return function(App $app){
    
    $app->get('/',HomeController::class.':index');

    $app->group('/api', function($app) {
        $app->group('/petshoposasco',function($app){
        
            $app->get('/pets',ListPetController::class.':index');
            $app->get('/pets/{id}',FindPetController::class.':index');
            $app->get('/pets/{parameter}/{value}',FilterPetController::class.':index');
            
            $app->get('/user',ListUserController::class.':index');
            $app->get('/user/{id}',FindUserController::class.':index');
            $app->get('/user/{parameter}/{value}',FilterUserController::class.':index');
            
        });
    });
};
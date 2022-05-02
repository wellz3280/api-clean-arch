<?php
    declare(strict_types=1);

use Slim\App;
use Teste\Application\Controllers\HomeController;

return function(App $app){
    
    $app->get('/',HomeController::class.':index');
};
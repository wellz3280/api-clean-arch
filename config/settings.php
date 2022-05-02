<?php
    declare(strict_types=1);

use DI\Container;

return function(Container $container){
    $container->set('settings',function(){
        return [
            
            'errors' =>
            [
                'determineRouteBeforeAppMiddleware' => false,
                'displayErrorDetails' => true,
                'logErrorDetails' => true,
                'logErrors' => true,
            ],
                 
        ];
    });
};
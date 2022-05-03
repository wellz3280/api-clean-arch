<?php
    declare(strict_types=1);
    namespace Teste\Application\Controllers;

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Teste\Application\UseCase\InputBoundry;
use Teste\Application\UseCase\Users\ListUser;

final class ListUserController implements InterfaceController
{
    public function index(Request $request, Response $response, array $args):Response
    {
        $listUser = new ListUser();
    
        $load = json_encode($listUser->apply(new InputBoundry())->output(), JSON_PRETTY_PRINT);
        $response->getBody()->write($load);
        
        return $response->withHeader('Content-Type', 'application/json');
    }
}
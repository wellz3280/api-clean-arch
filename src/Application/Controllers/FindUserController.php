<?php
    declare(strict_types=1);
    namespace Teste\Application\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Teste\Application\UseCase\InputBoundry;
use Teste\Application\UseCase\Users\FindUserById;

final class FindUserController implements InterfaceController
{
    public function index(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $findUser = new FindUserById(new InputBoundry());
        $user = $findUser->load((int)$args['id']);
        
        $load = json_encode($user->output(), JSON_PRETTY_PRINT);
        $response->getBody()->write($load);
        
        return $response->withHeader('Content-Type', 'application/json');
    }
}
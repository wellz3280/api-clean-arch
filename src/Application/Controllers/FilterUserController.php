<?php
    declare(strict_types=1);
    namespace Teste\Application\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Teste\Application\UseCase\InputBoundry;
use Teste\Application\UseCase\Users\FilterUser;

final class FilterUserController implements InterfaceController
{
    public function index(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $filter = new FilterUser(new InputBoundry());
        $repository = $filter->loadByParam($args['parameter'],$args['value']);

        $load = json_encode($repository->output(), JSON_PRETTY_PRINT);
        $response->getBody()->write($load);
        
        return $response->withHeader('Content-Type', 'application/json');
    }
}
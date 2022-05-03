<?php
    declare(strict_types=1);
    namespace Teste\Application\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Teste\Application\UseCase\InputBoundryPet;
use Teste\Application\UseCase\Pets\ListPets;

final class ListPetController implements InterfaceController
{
    public function index(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $listPet = new ListPets();

        $load = json_encode($listPet->apply(new InputBoundryPet())->output(), JSON_PRETTY_PRINT);
        $response->getBody()->write($load);
        
        return $response->withHeader('Content-Type', 'application/json');
    }
}
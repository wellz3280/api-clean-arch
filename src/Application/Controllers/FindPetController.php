<?php
    declare(strict_types=1);
    namespace Teste\Application\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Teste\Application\UseCase\InputBoundryPet;
use Teste\Application\UseCase\Pets\FindPets;

final class FindPetController implements InterfaceController
{
    public function index(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $findPet = new FindPets(new InputBoundryPet());
        $pet = $findPet->loadPet((int)$args['id']);

        $load = json_encode($pet->output(), JSON_PRETTY_PRINT);
        $response->getBody()->write($load);
        
        return $response->withHeader('Content-Type', 'application/json');
    }
}
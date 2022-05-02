<?php
    declare(strict_types=1);
    namespace Teste\Application\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class HomeController implements InterfaceController
{
    public function index(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $response->getBody()->write('Hello World');
        return $response;
    }
}
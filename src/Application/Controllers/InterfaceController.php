<?php
    declare(strict_types=1);
    namespace Teste\Application\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface InterfaceController
{
    public function index(RequestInterface $request, ResponseInterface $response,array $args):ResponseInterface;
}
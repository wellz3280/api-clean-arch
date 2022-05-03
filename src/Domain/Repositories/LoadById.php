<?php
    declare(strict_types=1);
    namespace Teste\Domain\Repositories;

use Teste\Application\UseCase\OutputBoundry;

interface LoadById
{
    public function load(int $id):OutputBoundry;
}
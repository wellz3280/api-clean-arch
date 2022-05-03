<?php
    declare(strict_types=1);
    namespace Teste\Domain\Repositories;

use Teste\Application\UseCase\OutputBoundry;

interface LoadPetById
{
    public function loadPet(int $id):OutputBoundry;
}
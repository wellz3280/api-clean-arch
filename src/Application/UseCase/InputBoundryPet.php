<?php
    declare(strict_types=1);
    namespace Teste\Application\UseCase;

use Teste\Infra\Repositories\PetRepositorie;

final class InputBoundryPet
{
    public function get():PetRepositorie
    {
       return new PetRepositorie();
    
    }
}
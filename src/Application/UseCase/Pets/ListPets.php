<?php
    declare(strict_types=1);
    namespace Teste\Application\UseCase\Pets;

use Teste\Application\UseCase\InputBoundryPet;
use Teste\Application\UseCase\OutputBoundry;

final class ListPets
{
    public function apply(InputBoundryPet $input):OutputBoundry
    {
        $repository =  $input->get();
        $arrObj = [];

        foreach($repository->getPetRepositorie()as $item){
            $arrObj[]= $item->toArray();
        }

        return new OutputBoundry($arrObj);
    }
}
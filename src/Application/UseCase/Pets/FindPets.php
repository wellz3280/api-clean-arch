<?php
    declare(strict_types=1);
    namespace Teste\Application\UseCase\Pets;

use Teste\Application\UseCase\InputBoundryPet;
use Teste\Application\UseCase\OutputBoundry;
use Teste\Domain\Repositories\LoadById;

final class FindPets implements LoadById
{
    private InputBoundryPet $input;

    public function __construct(InputBoundryPet $input)
    {
        $this->input = $input;
    }

    public function load(int $id): OutputBoundry
    {
        $repository = $this->input->get();
        $arrPetObj = [];

        foreach($repository->getPetRepositorie() as $item){
            if($item->getId()=== $id){
                $arrPetObj[] =  $item->toArray();
            }
        }

        return new OutputBoundry($arrPetObj);
    }
}
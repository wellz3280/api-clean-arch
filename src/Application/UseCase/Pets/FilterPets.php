<?php
    declare(strict_types=1);
    namespace Teste\Application\UseCase\Pets;

use Teste\Application\UseCase\InputBoundryPet;
use Teste\Application\UseCase\OutputBoundry;
use Teste\Domain\Repositories\LoadByParameter;

final class FilterPets implements LoadByParameter
{
    private InputBoundryPet $input;

    public function __construct(InputBoundryPet $input)
    {
        $this->input = $input;    
    }
    public function loadByParam(string $param,string $value): OutputBoundry
    {
        $repository = $this->input->get();
        
        $arrObjFilter = [];

        foreach($repository->getPetRepositorie() as $item){
               
            foreach($item->toArray() as $key => $itens){
                    
                if($param == $key && $value == $itens){
                    $arrObjFilter[]= $item->toArray();
                }
            }
        }

        return new OutputBoundry($arrObjFilter);
    }
}
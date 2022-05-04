<?php
    declare(strict_types=1);
    namespace Teste\Application\UseCase\Users;

use Teste\Application\UseCase\InputBoundry;
use Teste\Application\UseCase\OutputBoundry;
use Teste\Domain\Repositories\LoadByParameter;

final class FilterUser implements LoadByParameter
{
    private InputBoundry $input;
   
    public function __construct(InputBoundry $input)
    {
        $this->input = $input;     
    }

    public function loadByParam(string $param, string $value): OutputBoundry
    {
        $repository = $this->input->get();

        $arrObjFilter = [];


        foreach($repository->getUserRepositorie() as $item){   
        
            foreach($item->toArray() as $key => $itens){
                if($param == $key && $value == $itens){
                    $arrObjFilter[] = $item->toArray();
                }
            }
        }


        return new OutputBoundry($arrObjFilter);
    }
}

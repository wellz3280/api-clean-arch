<?php
    declare(strict_types=1);
    namespace Teste\Application\UseCase\Users;

use Teste\Application\UseCase\InputBoundry;
use Teste\Application\UseCase\OutputBoundry;

final class ListUser
{

    public function apply(InputBoundry $input):OutputBoundry
    {
      $repository = $input->get();
      
      $arrObj = [];
      foreach($repository->getUserRepositorie() as $item){
        $arrObj[] = $item->toArray();
      }

      
      $output = new OutputBoundry($arrObj);

      return $output;
    
    }   
}
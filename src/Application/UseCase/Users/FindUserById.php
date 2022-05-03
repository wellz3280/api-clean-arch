<?php
    declare(strict_types=1);
    namespace Teste\Application\UseCase\Users;

use Teste\Application\UseCase\InputBoundry;
use Teste\Domain\Entities\User;
use Teste\Application\UseCase\OutputBoundry;
use Teste\Domain\Repositories\LoadById;

final class FindUserById implements LoadById
{
    private InputBoundry $input;

    public function __construct(InputBoundry $input)
    {
        $this->input = $input;
    }

    public function load(int $id): OutputBoundry
    {
        $repository = $this->input->get();
        $arrUserObj = [];

        foreach($repository->getUserRepositorie() as $item){
            if($item->getId() === $id){
                $arrUserObj[] = $item->toArray();
            }
        }
        
        return new OutputBoundry($arrUserObj);
    }
}
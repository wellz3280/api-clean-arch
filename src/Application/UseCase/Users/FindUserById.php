<?php
    declare(strict_types=1);
    namespace Teste\Application\UseCase\Users;

use Teste\Application\UseCase\InputBoundry;
use Teste\Domain\Entities\User;
use Teste\Application\UseCase\OutputBoundry;
use Teste\Domain\Repositories\LoadUserById;

final class FindUserById implements LoadUserById
{
    private InputBoundry $input;

    public function __construct(InputBoundry $input)
    {
        $this->input = $input;
    }

    public function loadUser(int $id): OutputBoundry
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
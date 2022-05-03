<?php
    declare(strict_types=1);
    namespace Teste\Intra\Repositories;

use Teste\Domain\Entities\User;

final class UserRepositories
{

    public function apply():array
    {
        return [
            [
                'id' => 1,
                'name' => 'weliton'
            ],
            [
                'id' => 2,
                'name' => 'karla'
            ],
            [
                'id' => 3,
                'name'=> 'danilo'
            ]
        ];       
    }

}
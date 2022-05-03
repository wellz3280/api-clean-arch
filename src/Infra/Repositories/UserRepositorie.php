<?php
    declare(strict_types=1);
    namespace Teste\Infra\Repositories;

use Teste\Domain\Entities\User;

final class UserRepositorie
{
 
    private function dbRepository():array
    {
        return [
            [
                'id' => 1,
                'name' => 'weliton',
                'age' => 35,
                'year' => 1986,
            ],
            [
                'id' => 2,
                'name' => 'karla',
                'age' => 38,
                'year' => 1983,
            ],
            [
                'id' => 3,
                'name'=> 'danilo',
                'age' => 34,
                'year' => 1987
            ]
        ];       
    }

    public function getUserRepositorie():array
    {
        $arrUserObj =[];

        foreach($this->dbRepository() as $data){
            $arrUserObj[]= new User(
                (int)$data['id']
                ,$data['name']
                ,$data['age']
                ,$data['year']
            );
        }

        return $arrUserObj;
    }

}
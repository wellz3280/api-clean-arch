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

    public function getUserRepositorie():array
    {
        $arrUserObj =[];

        foreach($this->dbRepository() as $data){
            $arrUserObj[]= new User((int)$data['id'],$data['name']);
        }

        return $arrUserObj;
    }

}
<?php
    declare(strict_types=1);
    namespace Teste\Infra\Repositories;

use Teste\Domain\Entities\Pet;

final class PetRepositorie
{
    private function dbRepository():array
    {
        return [
            [
                'id' => 1,
                'name' => 'do ruim',
                'raca' => 'pintcher',
                'idade' => 3
            ],
            [
                'id' => 2,
                'name' => 'cabra do capiroto',
                'raca' => 'pincther',
                'idade' => 5,
            ],
            [
                'id' => 3,
                'name'=> 'danubio',
                'raca'=> 'pastor alemão',
                'idade'=> 12
            ],
            [
                'id' => 4,
                'name'=> 'karmike',
                'raca'=> 'pastor alemão',
                'idade'=> 5
            ],
            [
                'id' => 5,
                'name'=> 'chicletinho',
                'raca'=> 'yasa shitzu',
                'idade'=> 6
            ]
        ];       
    }

    public function getUserRepositorie():array
    {
        $arrUserObj =[];

        foreach($this->dbRepository() as $data){
            $arrUserObj[]= new Pet(
                (int)$data['id'],
                $data['name'],
                $data['raca'],
                (int)$data['idade']
            );
        }

        return $arrUserObj;
    }
}
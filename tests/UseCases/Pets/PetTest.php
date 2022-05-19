<?php
    declare(strict_types=1);
    namespace Test\UseCases\Pets;

use PHPUnit\Framework\TestCase;
use Teste\Application\UseCase\InputBoundryPet;
use Teste\Application\UseCase\Pets\FilterPets;
use Teste\Application\UseCase\Pets\FindPets;
use Teste\Application\UseCase\Pets\ListPets;

final class PetTest extends TestCase 
{
    public function testDeveRetornarArrayComTodosOsPets()
    {
        $listPet = new ListPets();
        $list = $listPet->apply(new InputBoundryPet())->output();
        
        self::assertCount(5,$list);
        self::assertIsArray($list);
    }

     public function testDeveBuscarUmPetPorId()
    {
        $findPet = new FindPets(new InputBoundryPet());
        $pet = $findPet->load(2);
        $result = $pet->output();

        self::assertCount(1,$result);
        self::assertEquals('cabra do capiroto',$result[0]['name']);
        self::assertSame(2,$result[0]['id']);
    }

    public function testDeveFiltrarPetComDoisParametros()
    {
        $filter = new FilterPets(new InputBoundryPet());
        $repository = $filter->loadByParam('raca','pintcher');
        $result = $repository->output();
        
        self::assertCount(2,$result);
        self::assertIsArray($result);

        self::assertEquals('do ruim',$result[0]['name']);
        self::assertEquals('cabra do capiroto',$result[1]['name']);
    }
}

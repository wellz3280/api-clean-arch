<?php
    declare(strict_types=1);
    namespace Test\UseCases\Pets;

use PHPUnit\Framework\TestCase;
use Teste\Application\UseCase\InputBoundryPet;
use Teste\Application\UseCase\Pets\FindPets;

final class FindPetsTest extends TestCase
{
    public function testDeveBuscarUmPetPorId()
    {
        $findPet = new FindPets(new InputBoundryPet());
        $pet = $findPet->load(2);
        $result = $pet->output();

        self::assertCount(1,$result);
        self::assertEquals('cabra do capiroto',$result[0]['name']);
    }
}
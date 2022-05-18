<?php
    declare(strict_types=1);
    namespace Test\UseCases\Pets;

use PhpParser\Node\Expr\FuncCall;
use PHPUnit\Framework\TestCase;
use Teste\Application\UseCase\InputBoundryPet;
use Teste\Application\UseCase\Pets\FilterPets;

class FilterPetTest extends TestCase
{
    public function testDeveFiltrarPetComDoisParametros()
    {
        $filter = new FilterPets(new InputBoundryPet());
        $repository = $filter->loadByParam('raca','pintcher');
        $result = $repository->output();
        self::assertCount(2,$result);

        self::assertEquals('do ruim',$result[0]['name']);
        self::assertEquals('cabra do capiroto',$result[1]['name']);
    }
}

<?php
    declare(strict_types=1);
    namespace Test\UseCases\Pets;
    
    use PHPUnit\Framework\TestCase;
    use Teste\Application\UseCase\InputBoundryPet;
    use Teste\Application\UseCase\Pets\ListPets;

class ListPetsTest extends TestCase
{
    public function testRetornoDeArrayComTodosOsPets()
    {
        $listPet = new ListPets();
        $list = $listPet->apply(new InputBoundryPet())->output();
        
        self::assertCount(5,$list);
    }
}
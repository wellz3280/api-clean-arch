<?php
    declare(strict_types=1);
    namespace Test\UseCases\Pets;

use PHPUnit\Framework\TestCase;
use Teste\Application\UseCase\InputBoundry;
use Teste\Application\UseCase\Users\FilterUser;
use Teste\Application\UseCase\Users\FindUserById;
use Teste\Application\UseCase\Users\ListUser;

final class ListUserTest extends TestCase
{
    public function testDeveRetornarListaComTodosUsuarios()
    {
        $listUser = new ListUser();
        $output = $listUser->apply(new InputBoundry())->output();

        self::assertCount(3,$output);
        self::assertIsArray($output);
    }

    public function testDeveBuscarUmUsuarioPorId()
    {
        $findUser = new FindUserById(new InputBoundry());
        $user = $findUser->load(1);
        $output = $user->output();
        
        self::assertCount(1,$output);
        self::assertIsArray($output);
        self::assertSame('weliton',$output[0]['name']);
    }

    public function testDeveFiltrarUsuariosUsando2Parametros()
    {
        $filter = new FilterUser(new InputBoundry());
        $repository = $filter->loadByParam('age','35');

        self::assertCount(2,$repository->output());
        self::assertIsArray($repository->output());
        
        self::assertSame('weliton',$repository->output()[0]['name']);
        self::assertSame(35,$repository->output()[0]['age']);
        
        self::assertSame('danilo',$repository->output()[1]['name']);
        self::assertSame(35,$repository->output()[1]['age']);
    }
}
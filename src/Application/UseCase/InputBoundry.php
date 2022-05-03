<?php
    declare(strict_types=1);
    namespace Teste\Application\UseCase;

use Teste\Infra\Repositories\UserRepositorie;

final class InputBoundry
{

    public function get():UserRepositorie
    {
       return new UserRepositorie();
    
    }

}
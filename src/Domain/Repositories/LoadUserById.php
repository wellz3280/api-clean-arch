<?php
    declare(strict_types=1);
    namespace Teste\Domain\Repositories;

use Teste\Application\UseCase\OutputBoundry;
use Teste\Domain\Entities\User;

interface LoadUserById
{
    public function loadUser(User $user):OutputBoundry;
}
<?php
    declare(strict_types=1);
    namespace Teste\Application\UseCase;

use Teste\Domain\Entities\User;

final class InputBoundry
{
    private User $user;

    public function __construct(user $user)
    {
        $this->user = $user;
    }

    public function getUser():User
    {
        return $this->user;
    }
}
<?php
    declare(strict_types=1);
    namespace Teste\Domain\Repositories;

use Teste\Application\UseCase\OutputBoundry;

interface LoadByParameter
{
    public function loadByParam(string $param, string $value):OutputBoundry;
}
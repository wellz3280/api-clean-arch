<?php
    declare(strict_types=1);
    namespace Teste\Application\UseCase;

final class OutputBoundry
{
    private array $data;
    
    public function output(array $data):array
    {
        return $this->data;
    }
}
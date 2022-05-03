<?php
    declare(strict_types=1);
    namespace Teste\Application\UseCase;

final class OutputBoundry
{
    private array $data;
    public function __construct(array $data)
    {
        $this->data = $data;
    }
    
    public function output():array
    {
       return $this->data;
    }
}
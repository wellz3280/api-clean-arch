<?php
    declare(strict_types=1);
    namespace Teste\Domain\Entities;



final class Pet
{
    private int $id;
    private string $name;
    private string $raca;
    private int $idade;

    public function __construct(int $id, string $name, string $raca, int $idade)
    {
        $this->id = $id;
        $this->name = $name;
        $this->raca = $raca;
        $this->idade = $idade;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getRaca():string
    {
        return $this->raca;
    }

    public function getIdade():int
    {
        return $this->idade;
    }
}
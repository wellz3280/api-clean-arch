<?php
    declare(strict_types=1);
    namespace Teste\Domain\Entities;

final class User
{
    private int $id;
    private string $name;
    private int  $age;
    private int $year;

    public function __construct(int $id, string $name, int $age, int $year)
    {
        $this->id =$id;
        $this->name = $name;
        $this->age = $age;
        $this->year = $year;

    }

    public function toArray():array
    {
        return[
            'id' => $this->getId(),
            'name' => $this->getName(),
            'age' => $this->getAge(),
            'year' => $this->getYear()
        ];
    }

    public function getId():int
    {
        return $this->id;
    }

    public function getName():string
    {
        return $this->name;
    }


    public function getAge()
    {
        return $this->age;
    }

    public function getYear()
    {
        return $this->year;
    }
}
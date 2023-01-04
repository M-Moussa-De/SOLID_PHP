<?php

abstract class Animal
{
    public function __construct(protected string $name, protected float $age)
    {
    }

    public function makeSound(): string
    {
        return "No sound";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}

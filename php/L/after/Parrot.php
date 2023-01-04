<?php

require './Animal.php';

class Parrot extends Animal
{
    public function __construct(protected string $name, protected float $age, private string $talk)
    {
        parent::__construct($name, $age);
    }

    public function makeSound(): string
    {
        return $this->talk;
    }
}

$parrot = new Parrot("Alexandrine", 2, "Welcome to LSP");

echo "Name: " . $parrot->getName() . ', Age: ' . $parrot->getAge() . PHP_EOL; // Name: Alexandrine, Age: 2

echo $parrot->makeSound(); // Welcome to LSP

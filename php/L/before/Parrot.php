<?php

require './Animal.php';

class Parrot extends Animal
{
    public function makeSound(): string
    {
        throw new Exception('Parrots make no sound');
    }
}

$parrot = new Parrot("Alexandrine", 2);

echo "Name: " . $parrot->getName() . ', Age: ' . $parrot->getAge() . PHP_EOL; // Name: Alexandrine, Age: 2

echo $parrot->makeSound(); //  Throw exeption

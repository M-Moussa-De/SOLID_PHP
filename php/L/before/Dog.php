<?php

require './Animal.php';

class Dog extends Animal
{
    public function makeSound(): string
    {
        return "Worf worf!";
    }
}

$dog = new Dog("Balto", 4);

echo "Name: " . $dog->getName() . ', Age: ' . $dog->getAge() . PHP_EOL; // Name: Balto, Age: 4

echo $parrot->makeSound(); // Worf worf!
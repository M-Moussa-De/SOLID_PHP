<?php

require './Animal.php';

class Cat extends Animal
{
    public function makeSound(): string
    {
        return "Meooow!";
    }
}

$cat = new Cat("Arya", 2.5);

echo "Name: " . $cat->getName() . ', Age: ' . $cat->getAge() . PHP_EOL; // Name: Arya, Age: 2.5

echo $cat->makeSound(); // Meooow!
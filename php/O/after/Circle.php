<?php

require './IShape.php';

class Circle implements IShape
{

    public function __construct(protected float $radius)
    {
    }

    public function getArea(): float
    {
        return number_format(pi() * pow($this->radius, 2), 2);
    }
}

$circle = new Circle(7.6);

echo $circle->getArea() . PHP_EOL; // 181.46

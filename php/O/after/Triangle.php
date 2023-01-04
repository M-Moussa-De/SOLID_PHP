<?php

require './IShape.php';

class Triangle implements IShape
{

    public function __construct(protected float $base, protected float $height)
    {
    }

    public function getArea(): float
    {
        return number_format(($this->base * $this->height) / 2, 2);
    }
}

$triangle = new Triangle(9.17, 12.13);

echo $triangle->getArea() . PHP_EOL; // 55.62

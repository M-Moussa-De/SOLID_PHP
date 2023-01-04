<?php

require './IShape.php';

class Rectangle implements IShape
{
    public function __construct(protected float $width, protected float $height)
    {
    }

    public function getArea(): float
    {
        return number_format($this->width * $this->height, 2);
    }
}

$rectangle = new Rectangle(7.18, 4.5);

echo $rectangle->getArea() . PHP_EOL; // 32.31

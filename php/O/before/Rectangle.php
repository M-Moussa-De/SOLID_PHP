<?php

class Rectangle
{
    public function __construct(protected float $width, protected float $height)
    {
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}

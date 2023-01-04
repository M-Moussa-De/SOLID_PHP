<?php

class Circle
{
    public function __construct(protected float $radius)
    {
    }

    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}

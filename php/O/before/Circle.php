<?php

namespace App\O\Before;

class Circle
{
    public function __construct(protected $radius)
    {
    }

    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}

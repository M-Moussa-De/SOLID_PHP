<?php

namespace App\O\After;

use IShape;

class Circle implements IShape
{

    public function __construct(protected $radius)
    {
    }

    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}

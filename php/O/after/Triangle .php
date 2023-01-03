<?php

namespace App\O\After;

use IShape;

class Triangle implements IShape
{

    public function __construct(protected $base, protected $height)
    {
    }

    public function getArea(): float
    {
        return ($this->base * $this->height) / 2;
    }
}

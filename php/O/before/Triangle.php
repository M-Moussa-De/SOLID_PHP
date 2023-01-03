<?php

namespace App\O\Before;

class Triangle
{
    public function __construct(protected $base, protected $height)
    {
    }

    public function getArea(): float
    {
        return ($this->base * $this->height) / 2;
    }
}

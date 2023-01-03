<?php

namespace App\O\Before;

class Rectangle
{
    public function __construct(protected $width, protected $height)
    {
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}

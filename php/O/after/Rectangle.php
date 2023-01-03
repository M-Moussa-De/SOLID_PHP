<?php

namespace App\O\After;

use IShape;

class Recangle implements IShape
{

    public function __construct(protected $width, protected $height)
    {
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}

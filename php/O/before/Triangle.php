<?php

class Triangle
{
    public function __construct(protected float $base, protected float $height)
    {
    }

    public function getArea(): float
    {
        return ($this->base * $this->height) / 2;
    }
}

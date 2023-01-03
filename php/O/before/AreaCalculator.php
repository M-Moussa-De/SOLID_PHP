<?php

namespace App\O\Before;

class AreaCalculator
{
    public function __construct(protected $shapes)
    {
    }

    public function sum(): float
    {
        $area = [];

        foreach ($this->shapes as $shape) {

            if ($shape instanceof Circle) {

                $area[] = $shape->getArea();
            } elseif ($shape instanceof Rectangle) {

                $area[] = $shape->getArea();
            } elseif ($shape instanceof Triangle) {

                $area[] = $shape->getArea();
            }
        }

        return array_sum($area);
    }
}

/*
Here, the AreaCalculator class is no longer open for extension because we have to modify its sum() method
every time we want to add support for a new shape. This violates the Open-Closed Principle.

To refactor this code to follow the Open-Closed Principle, we can create an interface that defines a getArea() method and have all of our shape classes implement it.
See the after folder.
*/

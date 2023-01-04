<?php

require './Circle.php';
require './Rectangle.php';
require './Triangle.php';

class AreaCalculator
{
    public function __construct(protected $shapes = [])
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

$circle = new Circle(14);
$rectangle = new Rectangle(27, 9.8);
$triangle = new Triangle(18.6, 23);

$area_calc = new AreaCalculator([$circle, $rectangle, $triangle]);

$areas = number_format($area_calc->sum(), 2);

printf("The sum of areas of the three shapes is %s%s", $areas, PHP_EOL); // The sum of areas of the three shapes is 1,094.25

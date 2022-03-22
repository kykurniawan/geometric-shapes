<?php

// /////////////////////////////////////////////////////////////////////////////
// WORKING AREA
// THIS IS AN AREA WHERE YOU SHOULD WRITE YOUR CODE AND MAKE CHANGES
// /////////////////////////////////////////////////////////////////////////////

namespace App;

class Circle extends GeometricShape implements ShapeInterface
{
    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return pow($this->radius, 2) * self::PI;
    }

    public function getPerimeter(): float
    {
        return $this->radius * 2 * self::PI;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }
}

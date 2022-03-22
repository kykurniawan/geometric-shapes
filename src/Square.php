<?php

// /////////////////////////////////////////////////////////////////////////////
// WORKING AREA
// THIS IS AN AREA WHERE YOU SHOULD WRITE YOUR CODE AND MAKE CHANGES
// /////////////////////////////////////////////////////////////////////////////

namespace App;

class Square extends GeometricShape implements ShapeInterface, PolygonInterface
{
    private $side;

    public function __construct(float $side)
    {
        $this->side = $side;
    }

    public function getArea(): float
    {
        return pow($this->side, 2);
    }

    public function getPerimeter(): float
    {
        return $this->side * 4;
    }

    public function getSides(): int
    {
        return 4;
    }

    public function getSide(): float
    {
        return $this->side;
    }
    
    public function getAngles(): int
    {
        return 4;
    }
}
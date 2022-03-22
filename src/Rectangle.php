<?php

// /////////////////////////////////////////////////////////////////////////////
// WORKING AREA
// THIS IS AN AREA WHERE YOU SHOULD WRITE YOUR CODE AND MAKE CHANGES
// /////////////////////////////////////////////////////////////////////////////

namespace App;

class Rectangle extends GeometricShape implements ShapeInterface, PolygonInterface
{
    private $width;
    private $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float
    {
        return $this->width * $this->height;
    }

    public function getPerimeter(): float
    {
        return ($this->width + $this->height) * 2;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getAngles(): int
    {
        return 4;
    }
}
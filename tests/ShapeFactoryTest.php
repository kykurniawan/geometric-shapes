<?php

use PHPUnit\Framework\TestCase;
use App\ShapeFactory;

class ShapeFactoryTest extends TestCase
{
    public function testShouldThrowWrongParamCountExceptionWithWrongNumberOfParameters()
    {
        $this->expectException(WrongParamCountException::class);
        ShapeFactory::createShape("Circle", []);
        ShapeFactory::createShape("Rectangle", [1, 2, 3]);
        ShapeFactory::createShape("Square", [1, 2, 3]);
    }

    public function testShouldThrowUnsupportedShapeExceptionWithWrongShapeName()
    {
        $this->expectException(UnsupportedShapeException::class);
        ShapeFactory::createShape("Triangle", [1, 2, 3]);
    }
}

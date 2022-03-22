<?php

// /////////////////////////////////////////////////////////////////////////////
// TESTING AREA
// THIS IS AN AREA WHERE YOU CAN TEST YOUR WORK AND WRITE YOUR OWN UNIT TESTS
// /////////////////////////////////////////////////////////////////////////////

use App\Exceptions\WrongParamCountException;
use App\Rectangle;
use App\GeometricShape;
use App\PolygonInterface;
use App\ShapeFactory;
use App\ShapeInterface;
use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
    protected function getValidRectangle()
    {
        return new Rectangle(3, 2);
    }

    public function testShouldCreateRectangleObject()
    {
        $this->assertInstanceOf(Rectangle::class, ShapeFactory::createShape("Rectangle", [3, 2]));
        $this->assertInstanceOf(Rectangle::class, ShapeFactory::createShape("Rectangle", [3.65, 5.88]));
    }

    public function testShouldThrowWrongParamCountExceptionWithWrongNumberOfParameters()
    {
        $this->expectException(WrongParamCountException::class);
        ShapeFactory::createShape("Rectangle", []);
        ShapeFactory::createShape("Rectangle", [1]);
        ShapeFactory::createShape("Rectangle", [1, 1, 1]);
    }

    public function testRectangleObjectHasTheCorrectName()
    {
        $rectangle = $this->getValidRectangle();
        $this->assertEquals("Rectangle", $rectangle->getName());
    }

    public function testImplementsTheShapeInterface()
    {
        $rectangle = $this->getValidRectangle();
        $this->assertInstanceOf(ShapeInterface::class, $rectangle);
    }

    public function testImplementPolygonInterface()
    {
        $rectangle = $this->getValidRectangle();
        $this->assertInstanceOf(PolygonInterface::class, $rectangle);
    }

    public function testExtendsTheGeometricShape()
    {
        $rectangle = $this->getValidRectangle();
        $this->assertInstanceOf(GeometricShape::class, $rectangle);
    }

    public function testReturnsTheCorrectPerimeter()
    {
        $rectangle = $this->getValidRectangle();
        $this->assertEquals(10, $rectangle->getPerimeter());
    }

    public function testReturnsTheCorrectArea()
    {
        $rectangle = $this->getValidRectangle();
        $this->assertEquals(6, $rectangle->getArea());
    }

    public function testReturnsTheCorrectAngles()
    {
        $rectangle = $this->getValidRectangle();
        $this->assertEquals(4, $rectangle->getAngles());
    }
}
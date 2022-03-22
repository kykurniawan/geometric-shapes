<?php

use App\ShapeFactory;
use App\Square;
use App\Exceptions\WrongParamCountException;
use App\ShapeInterface;
use App\PolygonInterface;
use App\GeometricShape;
use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
    protected function getValidSquare()
    {
        return new Square(4);
    }

    public function testShouldCreateSquareObject()
    {
        $this->assertInstanceOf(Square::class, ShapeFactory::createShape("Square", [3]));
        $this->assertInstanceOf(Square::class, ShapeFactory::createShape("Square", [3.65]));
    }

    public function testShouldThrowWrongParamCountExceptionWithWrongNumberOfParameters()
    {
        $this->expectException(WrongParamCountException::class);
        ShapeFactory::createShape("Square", []);
        ShapeFactory::createShape("Square", [1]);
        ShapeFactory::createShape("Square", [1, 1, 1]);
    }

    public function testSquareObjectHasTheCorrectName()
    {
        $square = $this->getValidSquare();
        $this->assertEquals("Square", $square->getName());
    }

    public function testImplementsTheShapeInterface()
    {
        $square = $this->getValidSquare();
        $this->assertInstanceOf(ShapeInterface::class, $square);
    }

    public function testImplementPolygonInterface()
    {
        $square = $this->getValidSquare();
        $this->assertInstanceOf(PolygonInterface::class, $square);
    }

    public function testExtendsTheGeometricShape()
    {
        $square = $this->getValidSquare();
        $this->assertInstanceOf(GeometricShape::class, $square);
    }

    public function testReturnsTheCorrectPerimeter()
    {
        $square = $this->getValidSquare();
        $this->assertEquals(16, $square->getPerimeter());
    }

    public function testReturnsTheCorrectArea()
    {
        $square = $this->getValidSquare();
        $this->assertEquals(16, $square->getArea());
    }

    public function testReturnsTheCorrectAngles()
    {
        $square = $this->getValidSquare();
        $this->assertEquals(4, $square->getAngles());
    }
}

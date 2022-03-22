<?php

// /////////////////////////////////////////////////////////////////////////////
// TESTING AREA
// THIS IS AN AREA WHERE YOU CAN TEST YOUR WORK AND WRITE YOUR OWN UNIT TESTS
// /////////////////////////////////////////////////////////////////////////////

use App\Circle;
use App\Exceptions\WrongParamCountException;
use App\GeometricShape;
use App\PolygonInterface;
use App\ShapeFactory;
use App\ShapeInterface;
use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{
    protected function getValidCircle()
    {
        return ShapeFactory::createShape("Circle", [4]);
    }

    public function testShouldCreateCircleObject()
    {
        $this->assertInstanceOf(Circle::class, ShapeFactory::createShape("Circle", [4]));
        $this->assertInstanceOf(Circle::class, ShapeFactory::createShape("Circle", [4.5]));
    }

    public function testShouldThrowWrongParamCountExceptionWithWrongNumberOfParameters()
    {
        $this->expectException(WrongParamCountException::class);
        ShapeFactory::createShape("Circle", []);
        ShapeFactory::createShape("Circle", [4, 2.2]);
    }

    public function testCircleObjectHasTheCorrectName()
    {
        $circle = $this->getValidCircle();
        $this->assertEquals("Circle", $circle->getName());
    }

    public function testImplementsTheShapeInterface()
    {
        $circle = $this->getValidCircle();
        $this->assertInstanceOf(ShapeInterface::class, $circle);
    }

    public function testExtendsTheGeometricShape()
    {
        $circle = $this->getValidCircle();
        $this->assertInstanceOf(GeometricShape::class, $circle);
    }

    public function testReturnsTheCorrectPerimeter()
    {
        $circle = $this->getValidCircle();
        $this->assertEquals(25.12, $circle->getPerimeter());
    }

    public function testReturnsTheCorrectArea()
    {
        $circle = $this->getValidCircle();
        $this->assertEquals(50.24, $circle->getArea());
    }

    public function testDoesNotImplementPolygonInterface()
    {
        $circle = $this->getValidCircle();
        $this->assertNotInstanceOf(PolygonInterface::class, $circle);
    }
}
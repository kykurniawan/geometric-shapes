<?php

// /////////////////////////////////////////////////////////////////////////////
// WORKING AREA
// THIS IS AN AREA WHERE YOU SHOULD WRITE YOUR CODE AND MAKE CHANGES
// /////////////////////////////////////////////////////////////////////////////

namespace App;

use App\Exceptions\UnsupportedShapeException;
use App\Exceptions\WrongParamCountException;

/**
 * Class ShapeFactory
 * @package App
 */
class ShapeFactory
{
    const SUPPORTED_SHAPES = [
        'Circle',
        'Rectangle',
        'Square',
    ];

    /**
     * Creates a specific GeometricShape object from the given attributes.
     *
     * Usage examples:
     *     ShapeFactory::createShape("Circle", 4)
     *     ShapeFactory::createShape("Rectangle", [3, 5])
     *
     * @param string $shape
     * @param array $params
     * @return mixed
     * @throws WrongParamCountException|UnsupportedShapeException
     */
    public static function createShape(string $shape, array $params = [])
    {
        self::validateSupportedShape($shape);
        self::validateParamCount($shape, $params);

        $class = 'App\\' . $shape;
        return new $class(...$params);
    }

    private static function validateSupportedShape(string $shape)
    {
        if (!in_array($shape, self::SUPPORTED_SHAPES)) {
            throw new UnsupportedShapeException("Shape '$shape' is not supported.");
        }
    }

    private static function validateParamCount(string $shape, array $params)
    {
        $class = 'App\\' . $shape;
        $reflection = new \ReflectionClass($class);
        $requiredParamCount = $reflection->getConstructor()->getNumberOfRequiredParameters();
        if (count($params) !== $requiredParamCount) {
            throw new WrongParamCountException("Wrong number of params for shape '$shape'. Required: $requiredParamCount, given: " . count($params));
        }
    }
}

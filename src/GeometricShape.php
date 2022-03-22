<?php

// /////////////////////////////////////////////////////////////////////////////
// IMPORTANT:
// THE CODE BELOW IS READ ONLY CODE AND YOU SHOULD INSPECT IT TO SEE WHAT IT
// DOES IN ORDER TO COMPLETE THE TASK, BUT DO NOT MODIFY IT IN ANY WAY AS THAT
// WILL RESULT IN A TEST FAILURE
// /////////////////////////////////////////////////////////////////////////////

namespace App;

/**
 * Class GeometricShape
 * Describes the base class for the shapes
 * @package App
 */
abstract class GeometricShape
{
    /**
     * PI const
     */
    const PI = 3.14;

    /**
     * @return string
     */
    public function getName(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
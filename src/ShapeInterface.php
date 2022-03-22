<?php

// /////////////////////////////////////////////////////////////////////////////
// IMPORTANT:
// THE CODE BELOW IS READ ONLY CODE AND YOU SHOULD INSPECT IT TO SEE WHAT IT
// DOES IN ORDER TO COMPLETE THE TASK, BUT DO NOT MODIFY IT IN ANY WAY AS THAT
// WILL RESULT IN A TEST FAILURE
// /////////////////////////////////////////////////////////////////////////////

namespace App;

/**
 * Interface ShapeInterface
 * @package App
 */
interface ShapeInterface
{
    /**
     * Returns the perimeter of the shape
     * @return float
     */
    public function getPerimeter(): float;

    /**
     * Return the area of the shape
     * @return float
     */
    public function getArea(): float;
}
<?php

// /////////////////////////////////////////////////////////////////////////////
// IMPORTANT:
// THE CODE BELOW IS READ ONLY CODE AND YOU SHOULD INSPECT IT TO SEE WHAT IT
// DOES IN ORDER TO COMPLETE THE TASK, BUT DO NOT MODIFY IT IN ANY WAY AS THAT
// WILL RESULT IN A TEST FAILURE
// /////////////////////////////////////////////////////////////////////////////

namespace App;

/**
 * Interface PolygonInterface
 * @package App
 */
interface PolygonInterface
{
    /**
     * Returns the number of angles in the polygon
     * @return int
     */
    public function getAngles(): int;
}
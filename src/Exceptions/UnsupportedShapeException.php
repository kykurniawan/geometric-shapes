<?php

// /////////////////////////////////////////////////////////////////////////////
// WORKING AREA
// THIS IS AN AREA WHERE YOU SHOULD WRITE YOUR CODE AND MAKE CHANGES
// /////////////////////////////////////////////////////////////////////////////

namespace App\Exceptions;

class UnsupportedShapeException extends \Exception
{
    public function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
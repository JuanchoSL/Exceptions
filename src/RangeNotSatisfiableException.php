<?php

namespace JuanchoSL\Exceptions;

use Exception;

class RangeNotSatisfiableException extends Exception
{
    const CODE = 416;

    public function __construct(string $message)
    {
        parent::__construct($message, self::CODE);
    }
}
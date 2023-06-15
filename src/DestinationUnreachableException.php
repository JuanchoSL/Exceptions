<?php

namespace JuanchoSL\Exceptions;

use Exception;

class DestinationUnreachableException extends Exception
{
    const CODE = 408;

    public function __construct(string $message)
    {
        parent::__construct($message, self::CODE);
    }
}
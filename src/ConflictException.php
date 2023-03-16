<?php

namespace JuanchoSL\Exceptions;

use Exception;

class ConflictException extends Exception
{
    const CODE = 409;

    public function __construct(string $message)
    {
        parent::__construct($message, self::CODE);
    }
}

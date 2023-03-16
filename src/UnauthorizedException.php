<?php

namespace JuanchoSL\Exceptions;

use Exception;

class UnauthorizedException extends Exception
{
    const CODE = 401;

    public function __construct(string $message)
    {
        parent::__construct($message, self::CODE);
    }
}
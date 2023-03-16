<?php

namespace JuanchoSL\Exceptions;

use Exception;

class ExpectationFailedException extends Exception
{
    const CODE = 417;

    public function __construct(string $message)
    {
        parent::__construct($message, self::CODE);
    }
}

<?php

namespace App\Exceptions;

use Exception;

class PreconditionFailedException extends Exception
{
    const CODE = 412;

    public function __construct(string $message)
    {
        parent::__construct($message, self::CODE);
    }
}
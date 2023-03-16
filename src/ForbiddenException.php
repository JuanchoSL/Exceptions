<?php

namespace App\Exceptions;

use Exception;

class ForbiddenException extends Exception
{
    const CODE = 403;

    public function __construct(string $message)
    {
        parent::__construct($message, self::CODE);
    }
}
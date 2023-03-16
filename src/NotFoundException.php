<?php

namespace JuanchoSL\Exceptions;

use Exception;

class NotFoundException extends Exception
{
    const CODE = 404;

    public function __construct(string $message)
    {
        parent::__construct($message, self::CODE);
    }
}

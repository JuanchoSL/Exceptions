<?php

namespace JuanchoSL\Exceptions;

use Exception;

class NotModifiedException extends Exception
{
    const CODE = 304;

    public function __construct(string $message)
    {
        parent::__construct($message, self::CODE);
    }
}

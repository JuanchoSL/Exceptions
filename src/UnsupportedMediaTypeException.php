<?php

namespace JuanchoSL\Exceptions;

use Exception;

class UnsupportedMediaTypeException extends Exception
{
    const CODE = 415;

    public function __construct(string $message)
    {
        parent::__construct($message, self::CODE);
    }
}
<?php

namespace JuanchoSL\Exceptions;

use Exception;

class UnprocessableEntityException extends Exception
{
    const CODE = 422;

    public function __construct(string $message)
    {
        parent::__construct($message, self::CODE);
    }
}
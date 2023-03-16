<?php

namespace JuanchoSL\Exceptions;

class BadRequestException extends \Exception
{

    const CODE = 400;

    public function __construct(string $message)
    {
        parent::__construct($message, self::CODE);
    }

}

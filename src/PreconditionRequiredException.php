<?php


namespace JuanchoSL\Exceptions;

class PreconditionRequiredException extends \Exception
{

    const CODE = 428;

    public function __construct(string $message)
    {
        parent::__construct($message, self::CODE, null);
    }

}

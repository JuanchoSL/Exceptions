<?php


namespace JuanchoSL\Exceptions;

class ServiceUnavailableException extends \Exception
{

    const CODE = 503;

    public function __construct(string $message)
    {
        parent::__construct($message, self::CODE, null);
    }

}

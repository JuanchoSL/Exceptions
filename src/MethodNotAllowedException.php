<?php

namespace JuanchoSL\Exceptions;

use Exception;
use JuanchoSL\HttpHeaders\Constants\Status\Codes;

class MethodNotAllowedException extends Exception
{

    public function __construct(string $message)
    {
        parent::__construct($message, Codes::METHOD_NOT_ALLOWED);
    }

}
<?php

namespace JuanchoSL\Exceptions;

use Exception;
use JuanchoSL\HttpHeaders\Constants\Status\Codes;

class PreconditionFailedException extends Exception
{

    public function __construct(string $message)
    {
        parent::__construct($message, Codes::PRECONDITION_FAILED);
    }
}

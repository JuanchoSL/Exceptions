<?php

namespace JuanchoSL\Exceptions;

use Exception;
use JuanchoSL\HttpHeaders\Constants\Status\Codes;

class BadRequestException extends Exception
{

    public function __construct(string $message)
    {
        parent::__construct($message, Codes::BAD_REQUEST);
    }

}

<?php

namespace JuanchoSL\Exceptions;

use Exception;
use JuanchoSL\HttpHeaders\Constants\Status\Codes;

class UnsupportedMediaTypeException extends Exception
{

    public function __construct(string $message)
    {
        parent::__construct($message, Codes::UNSUPPORTED_MEDIA_TYPE);
    }
}
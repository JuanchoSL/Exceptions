<?php

declare(strict_types=1);

namespace JuanchoSL\Exceptions;

use Exception;
use JuanchoSL\HttpHeaders\Constants\Status\Codes;

class ExpectationFailedException extends Exception
{

    public function __construct(string $message)
    {
        parent::__construct($message, Codes::EXPECTATION_FAILED);
    }
}

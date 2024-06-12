<?php

declare(strict_types=1);

namespace JuanchoSL\Exceptions;

use Exception;
use JuanchoSL\HttpHeaders\Constants\Status\Codes;

class ServiceUnavailableException extends Exception
{

    public function __construct(string $message)
    {
        parent::__construct($message, Codes::SERVICE_UNAVAILABLE);
    }

}

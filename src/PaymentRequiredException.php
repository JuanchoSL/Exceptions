<?php

namespace JuanchoSL\Exceptions;

use Exception;
use JuanchoSL\HttpHeaders\Constants\Status\Codes;

class PaymentRequiredException extends Exception
{

    public function __construct(string $message)
    {
        parent::__construct($message, Codes::PAYMENT_REQUIRED);
    }

}

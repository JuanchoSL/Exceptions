<?php declare(strict_types=1);

namespace JuanchoSL\Exceptions;

use Exception;
use Fig\Http\Message\StatusCodeInterface;

class PreconditionFailedException extends Exception
{

    public function __construct(string $message)
    {
        parent::__construct($message, StatusCodeInterface::STATUS_PRECONDITION_FAILED);
    }
}

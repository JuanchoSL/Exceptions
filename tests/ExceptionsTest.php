<?php

namespace JuanchoSL\Exceptions\Tests;

use Fig\Http\Message\StatusCodeInterface;
use JuanchoSL\Exceptions\BadRequestException;
use JuanchoSL\Exceptions\ConflictException;
use JuanchoSL\Exceptions\DestinationUnreachableException;
use JuanchoSL\Exceptions\ExpectationFailedException;
use JuanchoSL\Exceptions\FailedDependencyException;
use JuanchoSL\Exceptions\ForbiddenException;
use JuanchoSL\Exceptions\GoneException;
use JuanchoSL\Exceptions\LockedException;
use JuanchoSL\Exceptions\MethodNotAllowedException;
use JuanchoSL\Exceptions\NotAcceptableException;
use JuanchoSL\Exceptions\NotFoundException;
use JuanchoSL\Exceptions\NotImplementedException;
use JuanchoSL\Exceptions\NotModifiedException;
use JuanchoSL\Exceptions\PaymentRequiredException;
use JuanchoSL\Exceptions\PreconditionFailedException;
use JuanchoSL\Exceptions\PreconditionRequiredException;
use JuanchoSL\Exceptions\RangeNotSatisfiableException;
use JuanchoSL\Exceptions\ServiceUnavailableException;
use JuanchoSL\Exceptions\TooManyRequestsException;
use JuanchoSL\Exceptions\UnauthorizedException;
use JuanchoSL\Exceptions\UnavailableLegalReasonException;
use JuanchoSL\Exceptions\UnprocessableEntityException;
use JuanchoSL\Exceptions\UnsupportedMediaTypeException;
use PHPUnit\Framework\TestCase;

class ExceptionsTest extends TestCase
{

    public function testNotModifiedException()
    {
        $this->expectException(NotModifiedException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_NOT_MODIFIED);
        throw new NotModifiedException("Launch exception");
    }
    public function testBadRequestException()
    {
        $this->expectException(BadRequestException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_BAD_REQUEST);
        throw new BadRequestException("Launch exception");
    }

    public function testUnauthorizedException()
    {
        $this->expectException(UnauthorizedException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_UNAUTHORIZED);
        throw new UnauthorizedException("Launch exception");
    }

    public function testPaymentRequiredException()
    {
        $this->expectException(PaymentRequiredException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_PAYMENT_REQUIRED);
        throw new PaymentRequiredException("Launch exception");
    }

    public function testForbiddenException()
    {
        $this->expectException(ForbiddenException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_FORBIDDEN);
        throw new ForbiddenException("Launch exception");
    }

    public function testNotFoundException()
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_NOT_FOUND);
        throw new NotFoundException("Launch exception");
    }

    public function testMethodNotAllowedException()
    {
        $this->expectException(MethodNotAllowedException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_METHOD_NOT_ALLOWED);
        throw new MethodNotAllowedException("Launch exception");
    }

    public function testDestinationUnreachableException()
    {
        $this->expectException(DestinationUnreachableException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_REQUEST_TIMEOUT);
        throw new DestinationUnreachableException("Launch exception");
    }

    public function testConflictException()
    {
        $this->expectException(ConflictException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_CONFLICT);
        throw new ConflictException("Launch exception");
    }
    public function tesPreconditionFailedException()
    {
        $this->expectException(PreconditionFailedException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_PRECONDITION_FAILED);
        throw new PreconditionFailedException("Launch exception");
    }

    public function UnsupportedMediaTypeException()
    {
        $this->expectException(UnsupportedMediaTypeException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_UNSUPPORTED_MEDIA_TYPE);
        throw new UnsupportedMediaTypeException("Launch exception");
    }
    public function testRangeNotSatisfiableException()
    {
        $this->expectException(RangeNotSatisfiableException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_RANGE_NOT_SATISFIABLE);
        throw new RangeNotSatisfiableException("Launch exception");
    }
    public function testExpectationFailedException()
    {
        $this->expectException(ExpectationFailedException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_EXPECTATION_FAILED);
        throw new ExpectationFailedException("Launch exception");
    }

    public function testUnprocessableEntityException()
    {
        $this->expectException(UnprocessableEntityException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_UNPROCESSABLE_ENTITY);
        throw new UnprocessableEntityException("Launch exception");
    }

    public function testPreconditionRequiredException()
    {
        $this->expectException(PreconditionRequiredException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_PRECONDITION_REQUIRED);
        throw new PreconditionRequiredException("Launch exception");
    }

    public function testServiceUnavailableException()
    {
        $this->expectException(ServiceUnavailableException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_SERVICE_UNAVAILABLE);
        throw new ServiceUnavailableException("Launch exception");
    }

    public function testNotImplementedException()
    {
        $this->expectException(NotImplementedException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_NOT_IMPLEMENTED);
        throw new NotImplementedException("Launch exception");
    }

    public function testLockedException()
    {
        $this->expectException(LockedException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_LOCKED);
        throw new LockedException("Launch exception");
    }

    public function testFailedDependencyException()
    {
        $this->expectException(FailedDependencyException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_FAILED_DEPENDENCY);
        throw new FailedDependencyException("Launch exception");
    }
    public function testGoneException()
    {
        $this->expectException(GoneException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_GONE);
        throw new GoneException("Launch exception");
    }
    public function testNotAcceptableException()
    {
        $this->expectException(NotAcceptableException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_NOT_ACCEPTABLE);
        throw new NotAcceptableException("Launch exception");
    }
    public function testTooManyRequestsException()
    {
        $this->expectException(TooManyRequestsException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_TOO_MANY_REQUESTS);
        throw new TooManyRequestsException("Launch exception");
    }
    public function testUnavailableLegalReasonException()
    {
        $this->expectException(UnavailableLegalReasonException::class);
        $this->expectExceptionCode(StatusCodeInterface::STATUS_UNAVAILABLE_FOR_LEGAL_REASONS);
        throw new UnavailableLegalReasonException("Launch exception");
    }
}
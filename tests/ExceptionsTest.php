<?php

namespace JuanchoSL\Exceptions\Tests;

use JuanchoSL\Exceptions\BadRequestException;
use JuanchoSL\Exceptions\ConflictException;
use JuanchoSL\Exceptions\DestinationUnreachableException;
use JuanchoSL\Exceptions\ExpectationFailedException;
use JuanchoSL\Exceptions\ForbiddenException;
use JuanchoSL\Exceptions\LockedException;
use JuanchoSL\Exceptions\MethodNotAllowedException;
use JuanchoSL\Exceptions\NotFoundException;
use JuanchoSL\Exceptions\NotImplementedException;
use JuanchoSL\Exceptions\NotModifiedException;
use JuanchoSL\Exceptions\PaymentRequiredException;
use JuanchoSL\Exceptions\PreconditionFailedException;
use JuanchoSL\Exceptions\PreconditionRequiredException;
use JuanchoSL\Exceptions\RangeNotSatisfiableException;
use JuanchoSL\Exceptions\ServiceUnavailableException;
use JuanchoSL\Exceptions\UnauthorizedException;
use JuanchoSL\Exceptions\UnprocessableEntityException;
use JuanchoSL\Exceptions\UnsupportedMediaTypeException;
use PHPUnit\Framework\TestCase;

class ExceptionsTest extends TestCase
{

    public function testNotModifiedException()
    {
        $this->expectException(NotModifiedException::class);
        $this->expectExceptionCode(304);
        throw new NotModifiedException("Launch exception");
    }
    public function testBadRequestException()
    {
        $this->expectException(BadRequestException::class);
        $this->expectExceptionCode(400);
        throw new BadRequestException("Launch exception");
    }

    public function testUnauthorizedException()
    {
        $this->expectException(UnauthorizedException::class);
        $this->expectExceptionCode(401);
        throw new UnauthorizedException("Launch exception");
    }

    public function testPaymentRequiredException()
    {
        $this->expectException(PaymentRequiredException::class);
        $this->expectExceptionCode(402);
        throw new PaymentRequiredException("Launch exception");
    }

    public function testForbiddenException()
    {
        $this->expectException(ForbiddenException::class);
        $this->expectExceptionCode(403);
        throw new ForbiddenException("Launch exception");
    }

    public function testNotFoundException()
    {
        $this->expectException(NotFoundException::class);
        $this->expectExceptionCode(404);
        throw new NotFoundException("Launch exception");
    }

    public function testMethodNotAllowedException()
    {
        $this->expectException(MethodNotAllowedException::class);
        $this->expectExceptionCode(405);
        throw new MethodNotAllowedException("Launch exception");
    }

    public function testDestinationUnreachableException()
    {
        $this->expectException(DestinationUnreachableException::class);
        $this->expectExceptionCode(408);
        throw new DestinationUnreachableException("Launch exception");
    }

    public function testConflictException()
    {
        $this->expectException(ConflictException::class);
        $this->expectExceptionCode(409);
        throw new ConflictException("Launch exception");
    }
    public function tesPreconditionFailedException()
    {
        $this->expectException(PreconditionFailedException::class);
        $this->expectExceptionCode(412);
        throw new PreconditionFailedException("Launch exception");
    }

    public function UnsupportedMediaTypeException()
    {
        $this->expectException(UnsupportedMediaTypeException::class);
        $this->expectExceptionCode(415);
        throw new UnsupportedMediaTypeException("Launch exception");
    }
    public function testRangeNotSatisfiableException()
    {
        $this->expectException(RangeNotSatisfiableException::class);
        $this->expectExceptionCode(416);
        throw new RangeNotSatisfiableException("Launch exception");
    }
    public function testExpectationFailedException()
    {
        $this->expectException(ExpectationFailedException::class);
        $this->expectExceptionCode(417);
        throw new ExpectationFailedException("Launch exception");
    }

    public function testUnprocessableEntityException()
    {
        $this->expectException(UnprocessableEntityException::class);
        $this->expectExceptionCode(422);
        throw new UnprocessableEntityException("Launch exception");
    }

    public function testPreconditionRequiredException()
    {
        $this->expectException(PreconditionRequiredException::class);
        $this->expectExceptionCode(428);
        throw new PreconditionRequiredException("Launch exception");
    }

    public function testServiceUnavailableException()
    {
        $this->expectException(ServiceUnavailableException::class);
        $this->expectExceptionCode(503);
        throw new ServiceUnavailableException("Launch exception");
    }

    public function testNotImplementedException()
    {
        $this->expectException(NotImplementedException::class);
        $this->expectExceptionCode(501);
        throw new NotImplementedException("Launch exception");
    }

    public function testLockedException()
    {
        $this->expectException(LockedException::class);
        $this->expectExceptionCode(423);
        throw new LockedException("Launch exception");
    }
}
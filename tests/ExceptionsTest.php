<?php

namespace JuanchoSL\Exceptions\Tests;

use JuanchoSL\Exceptions\BadRequestException;
use JuanchoSL\Exceptions\ConflictException;
use JuanchoSL\Exceptions\DestinationUnreachableException;
use JuanchoSL\Exceptions\ExpectationFailedException;
use JuanchoSL\Exceptions\ForbiddenException;
use JuanchoSL\Exceptions\NotFoundException;
use JuanchoSL\Exceptions\NotModifiedException;
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

    public function testBadRequestException()
    {
        $this->expectException(BadRequestException::class);
        throw new BadRequestException("Launch exception");
    }
    public function testConflictException()
    {
        $this->expectException(ConflictException::class);
        throw new ConflictException("Launch exception");
    }
    public function testDestinationUnreachableException()
    {
        $this->expectException(DestinationUnreachableException::class);
        throw new DestinationUnreachableException("Launch exception");
    }
    public function testExpectationFailedException()
    {
        $this->expectException(ExpectationFailedException::class);
        throw new ExpectationFailedException("Launch exception");
    }
    public function testForbiddenException()
    {
        $this->expectException(ForbiddenException::class);
        throw new ForbiddenException("Launch exception");
    }
    public function testNotFoundException()
    {
        $this->expectException(NotFoundException::class);
        throw new NotFoundException("Launch exception");
    }
    public function testNotModifiedException()
    {
        $this->expectException(NotModifiedException::class);
        throw new NotModifiedException("Launch exception");
    }
    public function tesPreconditionFailedException()
    {
        $this->expectException(PreconditionFailedException::class);
        throw new PreconditionFailedException("Launch exception");
    }
    public function tesPreconditionRequiredException()
    {
        $this->expectException(PreconditionRequiredException::class);
        throw new PreconditionRequiredException("Launch exception");
    }
    public function testRangeNotSatisfiableException()
    {
        $this->expectException(RangeNotSatisfiableException::class);
        throw new RangeNotSatisfiableException("Launch exception");
    }
    public function testServiceUnavailableException()
    {
        $this->expectException(ServiceUnavailableException::class);
        throw new ServiceUnavailableException("Launch exception");
    }
    public function testUnauthorizedException()
    {
        $this->expectException(UnauthorizedException::class);
        throw new UnauthorizedException("Launch exception");
    }
    public function testUnprocessableEntityException()
    {
        $this->expectException(UnprocessableEntityException::class);
        throw new UnprocessableEntityException("Launch exception");
    }
    public function UnsupportedMediaTypeException()
    {
        $this->expectException(UnsupportedMediaTypeException::class);
        throw new UnsupportedMediaTypeException("Launch exception");
    }

}
# Exceptions

## Description
A small, lightweight collection of Exceptions that are using the standard status codes for use on requests


## Install
```bash
composer require juanchosl/exceptions
```

## How use it
Load composer autoload and use the JuanchoSL\Exceptions\{EXCEPTION} class

```php
if(!files_exists($full_path)){
    throw new NotFoundException("The file '{$full_path}' does not exists");
}
```
## Available Code exceptions

| Code | Class                          |
| ---- |:-------------------------------|
| 304 | NotModifiedException            |
| 400 | BadRequestException             |
| 401 | UnauthorizedException           |
| 402 | PaymentRequiredException        |
| 403 | ForbiddenException              |
| 404 | NotFoundException               |
| 405 | MethodNotAllowedException       |
| 406 | NotAcceptableException          |
| 408 | DestinationUnreachableException |
| 409 | ConflictException               |
| 410 | GoneException                   |
| 412 | PreconditionFailedException     |
| 415 | UnsupportedMediaTypeException   |
| 416 | RangeNotSatisfiableException    |
| 417 | ExpectationFailedException      |
| 422 | UnprocessableEntityException    |
| 423 | LockedException                 |
| 424 | FailedDependencyException       |
| 428 | PreconditionRequiredException   |
| 429 | TooManyRequestsException        |
| 451 | UnavailableLegalReasonException |
| 501 | NotImplementedException         |
| 503 | ServiceUnavailableException     |

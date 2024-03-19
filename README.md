# Exceptions

## Description
A small, lightweight collection of Exceptions that are using the standard values for use on requests


## Install
```
composer require juanchosl/exceptions
```

## How use it
Load composer autoload and use the JuanchoSL\Exceptions\{EXCEPTION} class

```
if(!files_exists($full_path)){
    throw new NotFoundException("The file '{$full_path}' does not exists");
}
```
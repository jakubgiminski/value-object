# Value Object
[![Coverage Status](https://coveralls.io/repos/github/jakubgiminski/value-object/badge.svg?branch=master)](https://coveralls.io/github/jakubgiminski/value-object?branch=master)

This is a library of abstract classes intended to be used as bases for value objects. 
Includes examples in form of unit tested use cases.

## ValueObject\StringValue
```
/** @var int */
protected $minLength;

/** @var int */
protected $maxLength;

/** @var array */
protected $validValues = [];
```
Examples:
- https://github.com/jakubgiminski/value-object/blob/master/ValueObject/UseCase/Season.php
- https://github.com/jakubgiminski/value-object/blob/master/ValueObject/UseCase/Password.php

## ValueObject\IntegerValue
```
/** @var array */
protected $validValues = [];

/** @var array */
protected $validRange = [];
```

Examples:
- https://github.com/jakubgiminski/value-object/blob/master/ValueObject/UseCase/Age.php

# Value Object

This is a library of abstract classes intended to be used as bases for value objects. 
Includes examples in form of unit tested use cases.

## ValueObject\StringValue
Rules (optional):
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
Rules (optional):
```
/** @var array */
protected $validRange = [];

/** @var array */
protected $validValues = [];

/** @var array */
protected $invalidValues = [];
```
Examples:
- https://github.com/jakubgiminski/value-object/blob/master/ValueObject/UseCase/Age.php
- https://github.com/jakubgiminski/value-object/blob/master/ValueObject/UseCase/TheatreSeat.php

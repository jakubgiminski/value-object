# Value Object

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

## ValueObject\IntegerValue
```
/** @var array */
protected $validValues = [];

/** @var array */
protected $validRange = [];
```

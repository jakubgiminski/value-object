# Value Object

This library is useful for building value objects in php. It is a collection of
abstract classes (each for every scalar type), that contain common validation mechanisms,
so you don't have to write them.

So far, we have `StringValue` and `IntegerValue` which already satisfy most of the needs.
More scalar representations may be implemented in the future (feel free to contribute).

Look [here](https://github.com/jakubgiminski/value-object/tree/master/ValueObject/UseCase) to find some unit tested examples.

Required PHP version: __7.0.0 or higher__

### ValueObject\StringValue
Rules (optional):
```
/** @var int */
protected $minLength;

/** @var int */
protected $maxLength;

/** @var array */
protected $validValues = [];
```
Examples of usage:
- [Season](https://github.com/jakubgiminski/value-object/blob/master/ValueObject/UseCase/Season.php)
- [Password](https://github.com/jakubgiminski/value-object/blob/master/ValueObject/UseCase/Password.php)

### ValueObject\IntegerValue
Rules (optional):
```
/** @var array */
protected $validRange = [];

/** @var array */
protected $validValues = [];

/** @var array */
protected $invalidValues = [];
```
Examples of usage:
- [Age](https://github.com/jakubgiminski/value-object/blob/master/ValueObject/UseCase/Age.php)
- [TheatreSeat](https://github.com/jakubgiminski/value-object/blob/master/ValueObject/UseCase/TheatreSeat.php)

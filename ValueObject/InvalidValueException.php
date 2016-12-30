<?php

namespace ValueObject;

class InvalidValueException extends \InvalidArgumentException
{
    public static function tooShort(int $minLength): self
    {
        return new self("Value must be at least $minLength characters long.");
    }

    public static function tooLong(int $maxLength): self
    {
        return new self("Value must be no longer than $maxLength characters.");
    }

    public static function notInRange(): self
    {
        return new self('Value not in valid range.');
    }

    public static function notAmongValid(): self
    {
        return new self('Value is not valid.');
    }

    public static function amongInvalid(): self
    {
        return new self('Value is invalid.');
    }
}

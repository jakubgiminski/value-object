<?php

namespace ValueObject\StringValue;

use ValueObject\InvalidValueException;

trait ValidateStringValue
{
    /**
     * @param string $value
     * @throws InvalidValueException
     */
    protected function validate(string $value)
    {
        if ($this->minLength && $this->minLength > strlen($value)) {
            throw InvalidValueException::tooShort($this->minLength);
        }

        if ($this->maxLength && $this->maxLength < strlen($value)) {
            throw InvalidValueException::tooLong($this->maxLength);
        }

        if (!empty($this->validValues) && in_array($value, $this->validValues) === false) {
            throw InvalidValueException::notAmongValid();
        }
    }
}

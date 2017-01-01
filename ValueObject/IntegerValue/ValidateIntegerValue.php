<?php

namespace ValueObject\IntegerValue;

use ValueObject\InvalidValueException;

trait ValidateIntegerValue
{
    /**
     * @param int $value
     * @throws InvalidValueException
     */
    protected function validate(int $value)
    {
        if ($this->isNotInRange($value)) {
            throw InvalidValueException::notInRange();
        }

        if ($this->isNotAmongValid($value)) {
            throw InvalidValueException::notAmongValid();
        }

        if ($this->isAmongInvalid($value)) {
            throw InvalidValueException::amongInvalid();
        }
    }

    /**
     * @param int $value
     * @return bool
     */
    protected function isAmongInvalid(int $value): bool
    {
        if (empty($this->invalidValues)) {
            return false;
        }

        return in_array($value, $this->invalidValues) !== false;
    }

    /**
     * @param int $value
     * @return bool
     */
    protected function isNotAmongValid(int $value): bool
    {
        if (empty($this->validValues)) {
            return false;
        }

        return in_array($value, $this->validValues) === false;
    }

    /**
     * @param int $value
     * @return bool
     */
    protected function isNotInRange(int $value): bool
    {
        if (count($this->validRange) !== 2) {
            return false;
        }

        return reset($this->validRange) > $value || end($this->validRange) < $value;
    }
}

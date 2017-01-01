<?php

namespace ValueObject\IntegerValue;

use ValueObject\InvalidValueException;

abstract class IntegerValue implements IntegerValueInterface
{
    /** @var int */
    private $value;

    /** @var array */
    protected $validRange = [];

    /** @var array */
    protected $validValues = [];

    /** @var array */
    protected $invalidValues = [];

    /**
     * @param int $value
     * @throws \InvalidArgumentException
     */
    public function __construct(int $value)
    {
        $this->validate($value);
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param IntegerValueInterface $integerValue
     * @return bool
     */
    public function isEqual(IntegerValueInterface $integerValue): bool
    {
        return $this->getValue() === $integerValue->getValue();
    }

    /**
     * @param IntegerValueInterface $integerValue
     * @return bool
     */
    public function isLessThan(IntegerValueInterface $integerValue): bool
    {
        return $this->getValue() < $integerValue->getValue();
    }

    /**
     * @param IntegerValueInterface $integerValue
     * @return bool
     */
    public function isGreaterThan(IntegerValueInterface $integerValue): bool
    {
        return $this->getValue() > $integerValue->getValue();
    }

    /**
     * @param int $value
     * @throws \InvalidArgumentException
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

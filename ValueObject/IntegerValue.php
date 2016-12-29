<?php

namespace ValueObject;

abstract class IntegerValue
{
    /** @var int */
    protected $value;

    /** @var array */
    protected $validValues = [];

    /** @var array */
    protected $validRange = [];

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
     * @param IntegerValue $integerValue
     * @return bool
     */
    public function isEqual(IntegerValue $integerValue): bool
    {
        return $this->getValue() === $integerValue->getValue();
    }

    /**
     * @param int $value
     * @throws \InvalidArgumentException
     */
    protected function validate(int $value)
    {
        if (count($this->validRange) === 2) {
            $this->validateRange($this->validRange, $value);
            return;
        }

        if (in_array($value, $this->validValues) === false) {
            throw InvalidValueException::notEqualToAnyValidValues();
        }
    }

    private function validateRange(array $range, int $value)
    {
        if (reset($range) > $value || end($range) < $value) {
            throw InvalidValueException::notInRange();
        }
    }
}

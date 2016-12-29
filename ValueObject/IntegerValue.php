<?php

namespace ValueObject;

abstract class IntegerValue
{
    /** @var int */
    protected $value;

    /** @var array */
    protected $validValues = [];

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
        if (in_array($value, $this->validValues) === false) {
            throw new \InvalidArgumentException;
        }
    }
}

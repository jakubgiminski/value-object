<?php

namespace ValueObject\IntegerValue;

abstract class IntegerValue implements IntegerValueInterface
{
    use ValidateIntegerValue;

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
}

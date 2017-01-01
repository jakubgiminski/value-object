<?php

namespace ValueObject\StringValue;

abstract class StringValue implements StringValueInterface
{
    use ValidateStringValue;

    /** @var string */
    protected $value;

    /** @var int */
    protected $minLength;

    /** @var int */
    protected $maxLength;

    /** @var array */
    protected $validValues = [];

    /**
     * @param string $value
     * @throws \InvalidArgumentException
     */
    public function __construct(string $value)
    {
        $this->validate($value);
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param StringValueInterface $stringValue
     * @return bool
     */
    public function isEqual(StringValueInterface $stringValue): bool
    {
        return $this->getValue() === $stringValue->getValue();
    }

    /**
     * @param StringValueInterface $stringValue
     * @return bool
     */
    public function isShorterThan(StringValueInterface $stringValue): bool
    {
        return strlen($this->getValue()) < strlen($stringValue->getValue());
    }

    /**
     * @param StringValueInterface $stringValue
     * @return bool
     */
    public function isLongerThan(StringValueInterface $stringValue): bool
    {
        return strlen($this->getValue()) > strlen($stringValue->getValue());
    }
}

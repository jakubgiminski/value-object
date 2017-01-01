<?php

namespace ValueObject;

abstract class StringValue implements StringValueInterface
{
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

    public function isShorterThan(StringValueInterface $stringValue): bool
    {
        return strlen($this->getValue()) < strlen($stringValue->getValue());
    }

    public function isLongerThan(StringValueInterface $stringValue): bool
    {
        return strlen($this->getValue()) > strlen($stringValue->getValue());
    }

    /**
     * @param string $value
     * @throws \InvalidArgumentException
     * @return self
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

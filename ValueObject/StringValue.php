<?php

namespace ValueObject;

abstract class StringValue
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
     * @param StringValue $stringValue
     * @return bool
     */
    public function isEqual(StringValue $stringValue): bool
    {
        return $this->getValue() === $stringValue->getValue();
    }

    /**
     * @param string $value
     * @throws \InvalidArgumentException
     * @return self
     */
    protected function validate(string $value)
    {
        if ($this->minLength && $this->minLength > strlen($value)) {
            throw new \InvalidArgumentException("Value must be at least {$this->minLength} characters long.");
        }

        if ($this->maxLength && $this->maxLength < strlen($value)) {
            throw new \InvalidArgumentException("Value must be no longer than {$this->minLength} characters.");
        }

        if (!empty($this->validValues) && in_array($value, $this->validValues) === false) {
            throw new \InvalidArgumentException;
        }
    }
}

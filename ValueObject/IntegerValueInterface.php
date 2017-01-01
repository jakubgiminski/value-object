<?php

namespace ValueObject;

interface IntegerValueInterface
{
    public function getValue(): int;
    public function isEqual(IntegerValueInterface $integerValue): bool;
    public function isLessThan(IntegerValueInterface $integerValue): bool;
    public function isGreaterThan(IntegerValueInterface $integerValue): bool;
}

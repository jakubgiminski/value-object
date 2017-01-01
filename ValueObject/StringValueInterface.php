<?php

namespace ValueObject;

interface StringValueInterface
{
    public function getValue(): string;
    public function isEqual(StringValueInterface $stringValue): bool;
    public function isShorterThan(StringValueInterface $stringValue): bool;
    public function isLongerThan(StringValueInterface $stringValue): bool;
}

<?php

namespace ValueObject\UseCase\Test;

use PHPUnit\Framework\TestCase;
use ValueObject\UseCase\Age;

class AgeTest extends TestCase
{
    public function testCanBeVeryYoung()
    {
        $age = new Age(0);
        self::assertSame($age->getValue(), 0);
    }

    public function testCanBeVeryOld()
    {
        $age = new Age(101);
        self::assertSame($age->getValue(), 101);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testCanNotBeNegative()
    {
        new Age(-5);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testCanNotBeUnhumanlyHigh()
    {
        new Age(300);
    }
}

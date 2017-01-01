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
     * @expectedException ValueObject\InvalidValueException
     */
    public function testCanNotBeNegative()
    {
        new Age(-5);
    }

    /**
     * @expectedException ValueObject\InvalidValueException
     */
    public function testCanNotBeUnhumanlyHigh()
    {
        new Age(300);
    }

    public function testCanBeEqualToAnotherAge()
    {
        self::assertTrue(
            (new Age(27))->isEqual(new Age(27))
        );
    }

    public function testCanBeGreaterThanAnotherAge()
    {
        self::assertTrue(
            (new Age(27))->isGreaterThan(new Age(26))
        );
    }

    public function testCanBeLessThanAnotherAge()
    {
        self::assertTrue(
            (new Age(26))->isLessThan(new Age(27))
        );
    }
}

<?php

namespace ValueObject\UseCase\Test;

use PHPUnit\Framework\TestCase;
use ValueObject\UseCase\TheatreSeat;

class TheatreSeatTest extends TestCase
{
    public function testCanBe22()
    {
        $seat = new TheatreSeat(22);
        self::assertSame($seat->getValue(), 22);
    }

    public function testCanBe1()
    {
        $seat = new TheatreSeat(1);
        self::assertSame($seat->getValue(), 1);
    }

    public function testCanBe220()
    {
        $seat = new TheatreSeat(220);
        self::assertSame($seat->getValue(), 220);
    }

    /**
     * @expectedException ValueObject\InvalidValueException
     */
    public function testCanNotBeNegativeFive()
    {
        new TheatreSeat(-5);
    }

    /**
     * @expectedException ValueObject\InvalidValueException
     */
    public function testCanNotBeZero()
    {
        new TheatreSeat(0);
    }

    /**
     * @expectedException ValueObject\InvalidValueException
     */
    public function testCanNotBe100()
    {
        new TheatreSeat(100);
    }

    public function testCanBe103()
    {
        $seat = new TheatreSeat(103);
        self::assertSame($seat->getValue(), 103);
    }

    /**
     * @expectedException ValueObject\InvalidValueException
     */
    public function testCanNotBe104()
    {
        new TheatreSeat(104);
    }
}


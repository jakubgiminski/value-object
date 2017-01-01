<?php

namespace ValueObject\UseCase\Test;

use PHPUnit\Framework\TestCase;
use ValueObject\UseCase\Season;

class SeasonTest extends TestCase
{
    public function testCanBeWinter()
    {
        $season = Season::winter();
        self::assertInstanceOf(Season::class, $season);
        self::assertSame($season->getValue(), 'winter');
    }

    public function testCanBeSpring()
    {
        $season = Season::spring();
        self::assertInstanceOf(Season::class, $season);
        self::assertSame($season->getValue(), 'spring');
    }

    public function testCanBeSummer()
    {
        $season = Season::summer();
        self::assertInstanceOf(Season::class, $season);
        self::assertSame($season->getValue(), 'summer');
    }

    public function testCanBeAutumn()
    {
        $season = Season::autumn();
        self::assertInstanceOf(Season::class, $season);
        self::assertSame($season->getValue(), 'autumn');
    }

    /**
     * @expectedException ValueObject\InvalidValueException
     */
    public function testCanNotBeInvalid()
    {
        new Season('invalid season name');
    }

    public function testCanBeEqualToAnotherSeason()
    {
        self::assertTrue(
            Season::winter()->isEqual(Season::winter())
        );
    }
}

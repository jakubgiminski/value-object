<?php

namespace ValueObject\UseCase\Test;

use PHPUnit\Framework\TestCase;
use ValueObject\UseCase\Password;

class PasswordTest extends TestCase
{
    public function testCanBeTenCharactersLong()
    {
        $password = new Password('1234567890');
        self::assertSame($password->getValue(), '1234567890');
    }

    /**
     * @expectedException ValueObject\InvalidValueException
     */
    public function testCanNotBeFourCharactersLong()
    {
        new Password('1234');
    }

    /**
     * @expectedException ValueObject\InvalidValueException
     */
    public function testCanNotBeTwentyCharactersLong()
    {
        new Password('12345678901234567890');
    }

    public function testCanBeEqualToAnotherPassword()
    {
        self::assertTrue(
            (new Password('secret'))->isEqual(new Password('secret'))
        );
    }

    public function testCanBeLongerThanAnotherPassword()
    {
        self::assertTrue(
            (new Password('long secret'))->isLongerThan(new Password('secret'))
        );
    }

    public function testCanBeShorterThanAnotherPassword()
    {
        self::assertTrue(
            (new Password('secret'))->isShorterThan(new Password('long secret'))
        );
    }
}

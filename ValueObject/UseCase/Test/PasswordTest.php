<?php

namespace ValueObject\UseCase\Test;

use PHPUnit\Framework\TestCase;
use ValueObject\UseCase\Password;

class PasswordTest extends TestCase
{
    public function testCanBeTenCharactersLong()
    {
        $password = new Password('1234567890');
        self::assertInstanceOf(Password::class, $password);
        self::assertSame($password->getValue(), '1234567890');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testCanNotBeFourCharactersLong()
    {
        new Password('1234');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testCanNotBeTwentyCharactersLong()
    {
        new Password('12345678901234567890');
    }
}

<?php

namespace ValueObject\UseCase;

use ValueObject\IntegerValue;

final class TheatreSeat extends IntegerValue
{
    // Initially, there were 220 seats in the theatre, numbered from 1 to 220.
    // We set a rule to ensure, that any given value is within a valid range.
    protected $validRange = [1, 220];

    // However, after some time four of these seats were replaced by additional lighting equipment.
    // These seats literally no longer exist, so we can mark them invalid.
    protected $invalidValues = [100, 101, 104, 105];
}

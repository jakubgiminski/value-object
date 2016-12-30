<?php

namespace ValueObject\UseCase;

use ValueObject\IntegerValue;

final class Age extends IntegerValue
{
    // Let's assume human age can be any number between 0 and 120.
    // All we have to do is set a range rule, just like that.
    protected $validRange = [0, 120];
}

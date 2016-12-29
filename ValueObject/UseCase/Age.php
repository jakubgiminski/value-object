<?php

namespace ValueObject\UseCase;

use ValueObject\IntegerValue;

final class Age extends IntegerValue
{
    protected $validRange = [0, 120];
}

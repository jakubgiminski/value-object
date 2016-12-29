<?php

namespace ValueObject\UseCase;

use ValueObject\StringValue;

final class Password extends StringValue
{
    protected $minLength = 5;
    protected $maxLength = 15;
}

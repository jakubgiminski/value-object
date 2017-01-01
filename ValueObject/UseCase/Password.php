<?php

namespace ValueObject\UseCase;

use ValueObject\StringValue\StringValue;

final class Password extends StringValue
{
    // Let's say that our password has two requirements.
    // It has to be longer than 5 characters.
    protected $minLength = 5;
    
    // And it can be no longer than 15 characters.
    protected $maxLength = 15;
}

<?php

namespace ValueObject\UseCase;

use ValueObject\StringValue;

final class Season extends StringValue
{
    protected $validValues = [
        'winter',
        'spring',
        'summer',
        'autumn',
    ];

    public static function winter()
    {
        return new self('winter');
    }

    public static function spring()
    {
        return new self('spring');
    }

    public static function summer()
    {
        return new self('summer');
    }

    public static function autumn()
    {
        return new self('autumn');
    }
}

<?php

namespace ValueObject\UseCase;

use ValueObject\StringValue\StringValue;

final class Season extends StringValue
{
    // There are exactly four seasons in a year, each represented by a string.
    // We set four valid values, nothing but these will be allowed.
    protected $validValues = [
        'winter',
        'spring',
        'summer',
        'autumn',
    ];

    // Additionally, we create a static constructor for every season.
    // This feels nicer to use, and allows to escape string parsing,
    // like 'WINTER' to 'winter', and so on.

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

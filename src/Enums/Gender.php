<?php

namespace Teleport\DaData\Enums;

/**
 * Class Gender
 * @package Teleport\DaData\Enums
 */
class Gender
{
    const UNKNOWN   = 0;
    const MALE      = 1;
    const FEMALE    = 2;

    public static array $map = [
        self::UNKNOWN   => 'UNKNOWN',
        self::MALE      => 'MALE',
        self::FEMALE    => 'FEMALE',
    ];

}

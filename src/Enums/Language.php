<?php

namespace Teleport\DaData\Enums;

/**
 * Class Language
 * @package Teleport\DaData\Enums
 */
class Language
{

    const RU           = 1;
    const EN           = 2;

    public static array $map = [
        self::RU    => 'ru',
        self::EN    => 'en',
    ];

}

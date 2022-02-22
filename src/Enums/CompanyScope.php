<?php

namespace Teleport\DaData\Enums;

/**
 * Class CompanyScope
 * @package Teleport\DaData\Enums
 */
class CompanyScope
{

    const FOUNDERS = 1;
    const MANAGERS = 2;

    /**
     * @var string[]
     */
    public static array $map  = [
        self::FOUNDERS => 'FOUNDERS',
        self::MANAGERS => 'MANAGERS',
    ];

}

<?php

namespace Teleport\DaData\Enums;

/**
 * Class CompanyStatus
 */
class CompanyStatus
{

    const ACTIVE        = 1;
    const LIQUIDATING   = 2;
    const LIQUIDATED    = 3;

    /**
     * @var string[]
     */
    public static array $map  = [
        self::ACTIVE        => 'ACTIVE',
        self::LIQUIDATING   => 'LIQUIDATING',
        self::LIQUIDATED    => 'LIQUIDATED',
    ];

}

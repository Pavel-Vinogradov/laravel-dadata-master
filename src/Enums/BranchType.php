<?php

namespace Teleport\DaData\Enums;

/**
 * Class BranchType
 * @package Teleport\DaData\Enums
 */
class BranchType
{

    const MAIN   = 1;
    const BRANCH = 2;

    /**
     * @var string[]
     */
    public static array $map  = [
        self::MAIN     => 'MAIN',
        self::BRANCH   => 'BRANCH',
    ];

}

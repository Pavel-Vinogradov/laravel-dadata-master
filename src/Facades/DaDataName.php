<?php

namespace Teleport\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataName
 * @package Teleport\DaData\Facades
 * @method \Teleport\DaData\DaDataName standardization(string $name)
 * @method \Teleport\DaData\DaDataName prompt(string $name, int $count, int $gender, array $parts)
 */
class DaDataName extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_name';
    }

}

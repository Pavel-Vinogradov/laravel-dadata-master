<?php

namespace Teleport\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataBank
 * @package Teleport\DaData\Facades
 * @method \Teleport\DaData\DaDataBank id(string $bank)
 * @method \Teleport\DaData\DaDataBank prompt(string $company, int $coun, array $status, array $type, string $locations, string $locations_boost)
 */
class DaDataBank extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_bank';
    }

}

<?php

namespace Teleport\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataPassport
 * @package Teleport\DaData\Facades
 * @method \Teleport\DaData\DaDataPassport standardization(string $id)
 * @method \Teleport\DaData\DaDataPassport fms(string $passport, int $count)
 */
class DaDataPassport extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_passport';
    }

}

<?php

namespace Teleport\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataEmail
 * @package Teleport\DaData\Facades
 * @method \Teleport\DaData\DaDataEmail standardization(string $email)
 * @method \Teleport\DaData\DaDataEmail prompt(string $email, int $count)
 */
class DaDataEmail extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_email';
    }

}

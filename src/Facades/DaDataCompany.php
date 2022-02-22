<?php

namespace Teleport\DaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DaDataCompany
 * @package Teleport\DaData\Facades
 * @method \Teleport\DaData\DaDataCompany id(string $id, int $count, string $kpp, int $branch_type, int $type)
 * @method \Teleport\DaData\DaDataCompany prompt(string $company, int $count, array $status, int $type, string $locations, string $locations_boost)
 * @method \Teleport\DaData\DaDataCompany affiliated(string $id, int $count, array $scope)
 *
 */
class DaDataCompany extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return 'da_data_company';
    }

}

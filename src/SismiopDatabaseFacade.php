<?php

namespace Wawans\SismiopDatabase;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wawans\SismiopDatabase\Skeleton\SkeletonClass
 */
class SismiopDatabaseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sismiop-database';
    }
}

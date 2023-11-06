<?php

namespace MeeeetDev\Combinations;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MeeeetDev\Combinations\Skeleton\SkeletonClass
 */
class CombinationsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'combinations';
    }
}

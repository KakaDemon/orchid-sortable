<?php

namespace Kakademon\OrchidSortable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kakademon\OrchidSortable\Skeleton\SkeletonClass
 */
class OrchidSortableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'orchid-sortable';
    }
}

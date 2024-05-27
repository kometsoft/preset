<?php

namespace Komet\Preset;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Komet\Preset\Skeleton\SkeletonClass
 */
class PresetFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'preset';
    }
}

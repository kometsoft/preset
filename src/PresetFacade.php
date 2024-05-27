<?php

namespace Foo\Preset;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Foo\Preset\Skeleton\SkeletonClass
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

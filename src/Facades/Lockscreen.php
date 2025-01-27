<?php

namespace Kepsondiaz\Lockscreen\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kepsondiaz\Lockscreen\Lockscreen
 */
class Lockscreen extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Kepsondiaz\Lockscreen\Lockscreen::class;
    }
}

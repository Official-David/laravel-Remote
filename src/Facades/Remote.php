<?php

namespace Spartie\Remote\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spartie\Remote\Remote
 */
class Remote extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-remote';
    }
}

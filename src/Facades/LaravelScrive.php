<?php

namespace BernskioldMedia\LaravelScrive\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BernskioldMedia\LaravelScrive\LaravelScrive
 */
class LaravelScrive extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-scrive';
    }
}

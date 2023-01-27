<?php

namespace Mahmoudmhamed\InertiaVueHelpers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mahmoudmhamed\InertiaVueHelpers\InertiaVueHelpers
 */
class InertiaVueHelpers extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mahmoudmhamed\InertiaVueHelpers\InertiaVueHelpers::class;
    }
}

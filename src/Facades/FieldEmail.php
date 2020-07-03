<?php

namespace Adaptcms\FieldEmail\Facades;

use Illuminate\Support\Facades\Facade;

class FieldEmail extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'FieldEmail';
    }
}

<?php

namespace Amitav\Variables\Facades;

use Illuminate\Support\Facades\Facade;

class Variables extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'variables';
    }
}

<?php

namespace Botble\Location\Facades;

use Botble\Location\Location;
use Illuminate\Support\Facades\Facade;

class LocationFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Location::class;
    }
}

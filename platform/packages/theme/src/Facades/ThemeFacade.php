<?php

namespace Botble\Theme\Facades;

use Botble\Theme\Theme;
use Illuminate\Support\Facades\Facade;

class ThemeFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Theme::class;
    }
}

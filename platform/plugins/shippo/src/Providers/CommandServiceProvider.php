<?php

namespace Botble\Shippo\Providers;

use Botble\Shippo\Commands\InitShippoCommand;
use Illuminate\Support\ServiceProvider;

class CommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            InitShippoCommand::class,
        ]);
    }
}

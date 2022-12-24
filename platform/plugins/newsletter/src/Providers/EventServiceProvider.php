<?php

namespace Botble\Newsletter\Providers;

use Botble\Newsletter\Events\SubscribeNewsletterEvent;
use Botble\Newsletter\Listeners\SubscribeNewsletterListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        SubscribeNewsletterEvent::class => [
            SubscribeNewsletterListener::class,
        ],
    ];
}

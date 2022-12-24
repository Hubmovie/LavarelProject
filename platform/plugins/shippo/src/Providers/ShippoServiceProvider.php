<?php

namespace Botble\Shippo\Providers;

use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\Shippo\Http\Middleware\WebhookMiddleware;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class ShippoServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        if (! is_plugin_active('ecommerce')) {
            return;
        }

        $this->setNamespace('plugins/shippo')->loadHelpers();
    }

    public function boot()
    {
        if (! is_plugin_active('ecommerce')) {
            return;
        }

        $this
            ->loadAndPublishTranslations()
            ->loadAndPublishViews()
            ->loadRoutes()
            ->loadAndPublishConfigurations(['general'])
            ->publishAssets();

        /**
         * @var Router $router
         */
        $router = $this->app['router'];

        $router->aliasMiddleware('shippo.webhook', WebhookMiddleware::class);

        $config = $this->app['config'];
        if (! $config->has('logging.channels.shippo')) {
            $config->set([
                'logging.channels.shippo' => [
                    'driver' => 'daily',
                    'path' => storage_path('logs/shippo.log'),
                ],
            ]);
        }

        $this->app->register(HookServiceProvider::class);
        $this->app->register(CommandServiceProvider::class);
    }
}

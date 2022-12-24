<?php

namespace Botble\Shippo;

use Botble\PluginManagement\Abstracts\PluginOperationAbstract;
use Botble\Setting\Models\Setting;

class Plugin extends PluginOperationAbstract
{
    public static function remove()
    {
        Setting::query()
            ->whereIn('key', [
                'shipping_shippo_status',
                'shipping_shippo_test_key',
                'shipping_shippo_production_key',
                'shipping_shippo_sandbox',
            ])
            ->delete();
    }
}

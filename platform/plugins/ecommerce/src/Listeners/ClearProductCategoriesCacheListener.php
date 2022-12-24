<?php

namespace Botble\Ecommerce\Listeners;

use Illuminate\Support\Facades\Cache;

class ClearProductCategoriesCacheListener
{
    public function handle(): void
    {
        Cache::forget('ecommerce-product-category-tree');
    }
}

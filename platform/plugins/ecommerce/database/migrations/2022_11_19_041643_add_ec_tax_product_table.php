<?php

use Botble\Ecommerce\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        if (! Schema::hasTable('ec_tax_products')) {
            Schema::create('ec_tax_products', function (Blueprint $table) {
                $table->id();
                $table->integer('tax_id')->unsigned()->index();
                $table->integer('product_id')->unsigned()->index();
            });
        }

        $products = Product::where('is_variation', 0)->withCount(['taxes'])->get();
        $defaultTaxRate = get_ecommerce_setting('default_tax_rate');

        foreach ($products as $product) {
            $taxId = $product->tax_id ?: $defaultTaxRate;
            if ($taxId && ! $product->taxes_count) {
                DB::table('ec_tax_products')->insertOrIgnore([
                    'product_id' => $product->id,
                    'tax_id' => $taxId,
                ]);
            }
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ec_tax_products');
    }
};

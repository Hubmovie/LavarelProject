<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;
use Botble\Base\Traits\EnumCastable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProductTag extends BaseModel
{
    use EnumCastable;

    protected $table = 'ec_product_tags';

    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];

    public function products(): BelongsToMany
    {
        return $this
            ->belongsToMany(Product::class, 'ec_product_tag_product', 'tag_id', 'product_id')
            ->where('is_variation', 0);
    }
}

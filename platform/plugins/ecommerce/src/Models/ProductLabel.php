<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;
use Botble\Base\Traits\EnumCastable;

class ProductLabel extends BaseModel
{
    use EnumCastable;

    protected $table = 'ec_product_labels';

    protected $fillable = [
        'name',
        'color',
        'status',
    ];

    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];
}

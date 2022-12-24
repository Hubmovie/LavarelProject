<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Models\BaseModel;

class ProductCategoryTranslation extends BaseModel
{
    protected $table = 'ec_product_categories_translations';

    protected $fillable = [
        'lang_code',
        'ec_product_categories_id',
        'name',
        'description',
    ];

    public $timestamps = false;
}

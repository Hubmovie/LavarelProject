<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Models\BaseModel;

class ProductAttributeSetTranslation extends BaseModel
{
    protected $table = 'ec_product_attribute_sets_translations';

    protected $fillable = [
        'lang_code',
        'ec_product_attribute_sets_id',
        'title',
    ];

    public $timestamps = false;
}

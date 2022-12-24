<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Models\BaseModel;

class ProductAttributeTranslation extends BaseModel
{
    protected $table = 'ec_product_attributes_translations';

    protected $fillable = [
        'lang_code',
        'ec_product_attributes_id',
        'title',
    ];

    public $timestamps = false;
}

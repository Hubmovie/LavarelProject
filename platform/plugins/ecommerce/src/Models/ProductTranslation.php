<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Models\BaseModel;

class ProductTranslation extends BaseModel
{
    protected $table = 'ec_products_translations';

    protected $fillable = [
        'lang_code',
        'ec_products_id',
        'name',
        'description',
        'content',
    ];

    public $timestamps = false;
}

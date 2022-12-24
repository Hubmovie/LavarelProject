<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Models\BaseModel;

class ProductTagTranslation extends BaseModel
{
    protected $table = 'ec_product_tags_translations';

    protected $fillable = [
        'lang_code',
        'ec_product_tags_id',
        'name',
    ];

    public $timestamps = false;
}

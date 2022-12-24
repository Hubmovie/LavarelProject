<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Models\BaseModel;

class ProductLabelTranslation extends BaseModel
{
    protected $table = 'ec_product_labels_translations';

    protected $fillable = [
        'lang_code',
        'ec_product_labels_id',
        'name',
    ];

    public $timestamps = false;
}

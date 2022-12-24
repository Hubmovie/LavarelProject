<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Models\BaseModel;

class BrandTranslation extends BaseModel
{
    protected $table = 'ec_brands_translations';

    protected $fillable = [
        'lang_code',
        'ec_brands_id',
        'name',
        'description',
    ];

    public $timestamps = false;
}

<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Models\BaseModel;

class FlashSaleTranslation extends BaseModel
{
    protected $table = 'ec_flash_sales_translations';

    protected $fillable = [
        'lang_code',
        'ec_flash_sales_id',
        'name',
    ];

    public $timestamps = false;
}

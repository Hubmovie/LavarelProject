<?php

namespace Botble\Faq\Models;

use Botble\Base\Models\BaseModel;

class FaqCategoryTranslation extends BaseModel
{
    protected $table = 'faq_categories_translations';

    protected $fillable = [
        'lang_code',
        'faq_categories_id',
        'name',
    ];

    public $timestamps = false;
}

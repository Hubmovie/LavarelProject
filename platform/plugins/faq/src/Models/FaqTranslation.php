<?php

namespace Botble\Faq\Models;

use Botble\Base\Models\BaseModel;

class FaqTranslation extends BaseModel
{
    protected $table = 'faqs_translations';

    protected $fillable = [
        'lang_code',
        'faqs_id',
        'question',
        'answer',
    ];

    public $timestamps = false;
}

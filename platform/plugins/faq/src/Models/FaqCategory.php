<?php

namespace Botble\Faq\Models;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;
use Botble\Base\Traits\EnumCastable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FaqCategory extends BaseModel
{
    use EnumCastable;

    protected $table = 'faq_categories';

    protected $fillable = [
        'name',
        'order',
        'status',
    ];

    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];

    public function faqs(): HasMany
    {
        return $this->hasMany(Faq::class, 'category_id');
    }
}

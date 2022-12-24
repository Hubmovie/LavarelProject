<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GlobalOption extends BaseModel
{
    protected $table = 'ec_global_options';

    protected $fillable = [
        'name',
        'option_type',
        'required',
    ];

    public function values(): HasMany
    {
        return $this->hasMany(GlobalOptionValue::class, 'option_id')
            ->orderBy('order', 'ASC');
    }

    public function getOptionNameAttribute(): ?string
    {
        return $this->name;
    }

    protected static function boot()
    {
        parent::boot();

        self::deleting(function (GlobalOption $option) {
            GlobalOptionValue::where('option_id', $option->id)->delete();
        });
    }
}

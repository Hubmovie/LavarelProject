<?php

namespace Botble\SimpleSlider\Models;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Traits\EnumCastable;
use Botble\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SimpleSlider extends BaseModel
{
    use EnumCastable;

    protected $table = 'simple_sliders';

    protected $fillable = [
        'name',
        'key',
        'description',
        'status',
    ];

    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];

    public function sliderItems(): HasMany
    {
        return $this->hasMany(SimpleSliderItem::class)->orderBy('simple_slider_items.order');
    }

    protected static function boot()
    {
        parent::boot();

        self::deleting(function (SimpleSlider $slider) {
            SimpleSliderItem::where('simple_slider_id', $slider->id)->delete();
        });
    }
}

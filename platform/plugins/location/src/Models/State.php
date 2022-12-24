<?php

namespace Botble\Location\Models;

use Botble\Base\Traits\EnumCastable;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends BaseModel
{
    use EnumCastable;

    protected $table = 'states';

    protected $fillable = [
        'name',
        'abbreviation',
        'country_id',
        'order',
        'is_default',
        'status',
    ];

    protected $casts = [
        'status' => BaseStatusEnum::class,
    ];

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class)->withDefault();
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function (State $state) {
            City::where('state_id', $state->id)->delete();
        });
    }
}

<?php

namespace Botble\Ecommerce\Models;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;
use Botble\Base\Models\BaseQueryBuilder;
use Botble\Base\Traits\EnumCastable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FlashSale extends BaseModel
{
    use EnumCastable;

    protected $table = 'ec_flash_sales';

    protected $fillable = [
        'name',
        'end_date',
        'status',
    ];

    protected $casts = [
        'status' => BaseStatusEnum::class,
        'end_date' => 'datetime',
    ];

    public function products(): BelongsToMany
    {
        return $this
            ->belongsToMany(Product::class, 'ec_flash_sale_products', 'flash_sale_id', 'product_id')
            ->withPivot(['price', 'quantity', 'sold']);
    }

    public function getEndDateAttribute($value): ?string
    {
        if (! $value) {
            return $value;
        }

        return Carbon::parse($value)->format('Y/m/d');
    }

    public function scopeNotExpired(BaseQueryBuilder $query): BaseQueryBuilder
    {
        return $query->whereDate('end_date', '>', Carbon::now()->toDateString());
    }

    public function scopeExpired(BaseQueryBuilder $query): BaseQueryBuilder
    {
        return $query->whereDate('end_date', '=<', Carbon::now()->toDateString());
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function (FlashSale $flashSale) {
            $flashSale->products()->detach();
        });
    }
}

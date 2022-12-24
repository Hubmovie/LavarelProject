<?php

namespace Botble\Menu\Models;

use Botble\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Request;

class MenuNode extends BaseModel
{
    protected $table = 'menu_nodes';

    protected $fillable = [
        'menu_id',
        'parent_id',
        'reference_id',
        'reference_type',
        'url',
        'icon_font',
        'title',
        'css_class',
        'target',
        'has_child',
        'position',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(MenuNode::class, 'parent_id');
    }

    public function child(): HasMany
    {
        return $this->hasMany(MenuNode::class, 'parent_id')->orderBy('position');
    }

    public function reference(): MorphTo
    {
        return $this->morphTo()->with(['slugable']);
    }

    public function getUrlAttribute($value): ?string
    {
        if ($value) {
            return apply_filters(MENU_FILTER_NODE_URL, $value);
        }

        if (! $this->reference_type) {
            return '/';
        }

        if (! $this->reference) {
            return '/';
        }

        return (string)$this->reference->url;
    }

    public function setUrlAttribute($value)
    {
        $this->attributes['url'] = $value;
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = str_replace('&amp;', '&', $value);
    }

    public function getTitleAttribute($value)
    {
        if ($value) {
            return $value;
        }

        if (! $this->reference_type || ! $this->reference) {
            return $value;
        }

        return $this->reference->name;
    }

    public function getActiveAttribute(): bool
    {
        return rtrim(url($this->url), '/') == rtrim(Request::url(), '/');
    }
}

<?php

namespace Botble\Widget\Models;

use Botble\Base\Models\BaseModel;

class Widget extends BaseModel
{
    protected $table = 'widgets';

    protected $fillable = [
        'widget_id',
        'sidebar_id',
        'theme',
        'position',
        'data',
    ];

    protected $casts = [
        'data' => 'json',
    ];

    public function setPositionAttribute($position): void
    {
        $this->attributes['position'] = $position >= 0 && $position < 127 ? $position : (int)substr($position, -1);
    }
}

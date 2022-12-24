<?php

namespace Botble\Theme\Http\Requests;

use Botble\Support\Http\Requests\Request;

class CustomJsRequest extends Request
{
    public function rules(): array
    {
        return [
            'header_js' => 'max:2500',
            'body_js' => 'max:2500',
            'footer_js' => 'max:2500',
        ];
    }
}

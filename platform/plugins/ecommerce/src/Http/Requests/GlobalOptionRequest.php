<?php

namespace Botble\Ecommerce\Http\Requests;

use Botble\Support\Http\Requests\Request;

class GlobalOptionRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'required',
        ];
    }
}

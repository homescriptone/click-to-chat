<?php

namespace Homescriptone\ClickToChatWhatsapp\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    
    public function rules()
    {
        return [

            'phone-number' => [
                'int',
            ],
            'display-widget' => [
                'boolean'
            ],
            'message' => [
                'string'
            ],
            'widget-app' =>[
                'string'
            ],
            'widget-position' => [
                'string'
            ]
        ];
    }
}

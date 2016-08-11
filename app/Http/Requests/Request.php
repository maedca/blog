<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    public function rules()
    {
        return [
            'name'=> 'mix:4|max:120|required',

        ];
    }
}

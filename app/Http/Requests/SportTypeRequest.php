<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SportTypeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
        ];
    }
}

<?php

namespace App\Http\ApiV1\Modules\Books\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'age' => ['required', 'integer', 'min:0'],
            'text' => 'required',
        ];
    }
}

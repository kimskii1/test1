<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFeedbackRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'author' => ['required', 'string'],
            'text' => ['required', 'string'],
        ];
    }
}

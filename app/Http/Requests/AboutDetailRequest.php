<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'string|nullable|max:255',
            'description' => 'string|nullable',
        ];
    }
}
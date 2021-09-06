<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NuggetRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            'content' => 'required|string|min:30',
            'image' => 'required|image|mimes:png,jpg'
        ];
    }

    public function messages()
    {
        return [
            'content.required' => 'Please filled the nugget',
            'content.min' => 'Nugget must content atlease 5 words'
        ];
    }
}

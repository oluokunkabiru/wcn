<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookUpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'image' =>'nullable|sometimes|file|mimes:png,jpg'

        ];
    }
    public function messages()
    {
        return [
            'title.required' => "Please provide book title",
            'content.required' => 'Please provide book description'
        ];
    }
}

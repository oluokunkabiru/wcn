<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventUpRequest extends FormRequest
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
            'date' => 'required|date',
            'image' => 'sometimes|nullable|image|mimes:png,jpg'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => "Please provide event title",
            'content.required' => 'Please provide event content',
            'date.required' => 'Please provide event date',
        ];
    }
}

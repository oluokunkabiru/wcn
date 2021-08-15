<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TestimonyRequest extends FormRequest
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
            'content' => 'required|string|min:20'
        ];
    }

    public function messages()
    {
        return [
            'content.required' => "Dear ". ucwords(Auth::user()->name).", please provide your testimony content"
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProfileUpdate extends FormRequest
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
            'name' => 'required|string|min:10',
            'email' => 'required|email|unique:users,email,'.Auth::user()->id,
            'phone' => 'required|numeric|unique:users,phone,'.Auth::user()->id,
            'currentp' => 'nullable|required_with:password|string',
            'password' => 'nullable|sometimes|string|min:6|confirmed',
            'about' =>'nullable|sometimes|string',

        ];
    }
    public function messages()
    {
        return [
            'currentp.required_with' =>'Please provide your current password',
        ];
    }
}

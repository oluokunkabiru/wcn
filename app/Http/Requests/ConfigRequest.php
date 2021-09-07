<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
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
            'name' => 'required|string',
            'logo' => 'nullable|sometimes|file|image|mimes:png,jpg',
            'facebook' => 'nullable|sometimes|string',
            'whatsapp' => 'nullable|sometimes|string',
            'linkedin' => 'nullable|sometimes|string',
            'twitter' => 'nullable|sometimes|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'instagram' => 'nullable|sometimes|string',
            'address' => 'nullable|sometimes|string',
            'youtube' => 'nullable|sometimes|string',
            'pioneer' => 'required|min:10|string',
            'youth' => 'required|string|min:10',
            'youth1' => 'required|string|min:10',
            'conception' => 'required|string|min:10',
            'about' => 'required|string|min:10',
            'core' => 'required|string|min:10',
            'pioneer1' => 'required|string|min:10',
            'vision' => 'required|string|min:10',
            'mission' => 'required|string|min:10'
        ];
    }
}

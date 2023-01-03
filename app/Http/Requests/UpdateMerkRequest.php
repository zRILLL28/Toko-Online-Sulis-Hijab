<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMerkRequest extends FormRequest
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
            'merk' => 'string|min:3|max:255',
            'image' => 'mimes:png,jpg,jpeg|image|max:5000',
            'description' => 'string|min:3'
        ];
    }

    public function messages()
    {
        return [
            'max' => 'Maksimal :max karakter',
            'min' => 'Minimal :min karakter',
            'string' => 'Format salah',
            'image.max' => 'Maksimal 5mb',
            'mimes' => 'Format yang diperbolehkan :values',
            'image' => 'Format harus gambar',
        ];
    }
}

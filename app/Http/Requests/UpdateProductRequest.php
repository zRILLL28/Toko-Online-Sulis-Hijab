<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'product_code' => "min:3|string",
            'product_name' => 'min:3|max:255|string',
            'image' => 'mimes:png,jpg,jpeg|image|max:5000',
            'stock' => '',
            'price' => '',
            'merk' => 'min:3|max:255',
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
            'unique' => 'Kode produk telah digunakan',
        ];
    }
}

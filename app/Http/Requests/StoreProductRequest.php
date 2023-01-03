<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'product_code' => "required|min:3|string|unique:products,product_code",
            'product_name' => 'required|min:3|max:255|string',
            'image' => 'required|mimes:png,jpg,jpeg|image|max:5000',
            'stock' => 'required',
            'price' => 'required',
            'merk' => 'required|min:3|max:255',
            'description' => 'required|min:3'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Kolom wajib diisi',
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

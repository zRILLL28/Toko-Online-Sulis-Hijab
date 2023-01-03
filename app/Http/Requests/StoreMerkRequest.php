<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMerkRequest extends FormRequest
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
            'merk' => 'required|unique:merks,merk|string|min:3|max:255',
            'description' => 'required|min:3|string',
            'image' => 'required|mimes:png,jpg,jpeg|image|max:5000',
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

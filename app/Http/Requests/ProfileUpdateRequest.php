<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'phone' => ['min:3', 'max:15', Rule::unique(User::class)->ignore($this->user()->id)],
            'address' => ['min:3', 'string'],
            'image' => ['mimes:png,jpg,jpeg', 'image', 'max:5000'],
        ];
    }
}

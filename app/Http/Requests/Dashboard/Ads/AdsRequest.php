<?php

namespace App\Http\Requests\Dashboard\Ads;

use Illuminate\Foundation\Http\FormRequest;

class AdsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title_ar' => 'required|string|max:800',
            'title_en' => 'required|string|max:800',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:5120',
        ];
    }
}

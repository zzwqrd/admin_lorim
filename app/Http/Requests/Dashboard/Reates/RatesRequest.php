<?php

namespace App\Http\Requests\Dashboard\Reates;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RatesRequest extends FormRequest
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
            'id'      => ['required', 'integer', Rule::exists('providers')],
            'rate'    => 'required|numeric',
            'review'    => 'required|string',
            'cons_review'    => 'required|string',
        ];
    }
}

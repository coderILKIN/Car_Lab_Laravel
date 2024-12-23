<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'make' => ['required', 'string', 'min:3', 'max:255'],
            'model' => ['required', 'string','min:3', 'max:255'],
            'year' => ['required', 'numeric'],
            'price_per_day' => ['required', 'numeric', 'min:0'],
            'image' => ['nullable', 'image', 'mimes:jpg,png,jpeg', 'max:1024'],
            'availablity' => ['nullable', 'boolean'],
            'services' => ['nullable', 'array'],
            'description' => ['nullable'],
        ];
    }
}

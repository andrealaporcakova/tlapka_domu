<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAnimalRequest extends FormRequest
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
            'status' => ['required', 'in:lost,found'],
            'species' => ['required', 'string', 'max:50'],
            'name' => ['nullable', 'string', 'max:100'],
            'breed' => ['nullable', 'string', 'max:100'],
            'sex' => ['required', 'in:male,female,unknown'],
            'location_city' => ['required', 'string', 'max:100'],
            'location_region' => ['required', 'string', 'max:100'],
            'report_date' => ['required', 'date'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:2048'],
            'guest_email' => [
                Rule::requiredIf(auth()->guest()),
                'nullable',
                'email',
                'max:100'
            ],
            'guest_phone' => [
                Rule::requiredIf(auth()->guest()),
                'nullable',
                'string',
                'max:20',
            ],
        ];
    }

    /**
     * Get the URL to redirect to on a validation error.
     *
     * @return string
     */
    protected function getRedirectUrl()
    {
        return parent::getRedirectUrl() . '#reporting';
    }
}
<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;


class RegisteredUserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'file', 'jpg', 'png', 'max:2048'],
            'address' => ['required', 'string', 'max:255'],
            'vat' => ['required', 'number', 'max:11', 'min:11', 'unique:restaurants,vat'],
        ];
    }

    public function message()
    {
        return [


            // Name messages
            'name.required' => 'The name field is required',
            'name.string' => 'The name must be composed of letters or letters and numbers',
            'name.max' => 'The name must be less than 255 characters',


            // Image messages
            'image.required' => 'The image field is required',
            'image.file' => 'The image must be a file',
            'image.jpg.png' => 'The image must be a jpg or a png file',
            'image.max' => 'The image must be less than 2048 bytes',


            // Address messages
            'address.required' => 'The address field is required',
            'address.string' => 'The address must be composed of letters or letters and numbers',
            'address.max' => 'The address must be less than 255 characters',


            // VAT messages
            'vat.required' => 'The VAT field is required',
            'vat.number' => 'The VAT must be composed of numbers',
            'vat.max' => 'The VAT must be 11 characters',
            'vat.min' => 'The VAT must be 11 characters',
        ];
    }
}

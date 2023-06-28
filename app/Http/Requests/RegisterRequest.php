<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstname'=>['required','string','max:255'],
            'lastname'=>['required','string','max:255'],
            'email'=>['required','string','max:255','email'],
            'reg_number'=>['required','string','max:255'],
            'address'=>['required','string','max:255'],
            'faculty'=>['required','string','max:255'],
            'department'=>['required','string','max:255'],
            'password'=>['required','string','max:255'],
        ];
    }
}

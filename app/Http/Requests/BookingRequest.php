<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class BookingRequest extends FormRequest
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
            'booking_id'=>['required','string','max:255'],
            'ride_id'=>['required','string','max:255'],
            'seat_id'=>['required','string','max:255'],
            'fee'=>['required','string','max:255'],
            'payment_method'=>['required','string','max:255'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {

        throw new HttpResponseException(response()->json([
        $validator->errors(),
        'status' => 'error'
        ], 200));
    }
}

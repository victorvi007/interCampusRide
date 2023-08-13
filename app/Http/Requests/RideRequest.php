<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RideRequest extends FormRequest
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
            'from'=>['required','string','max:255'],
            'to'=>['required','string','max:255'],
            'month'=> ['required','string','max:255'],
            'day'=> ['required','string','max:255'],
            'seat'=>['required','string','max:255'],
            'depature_hour'=>['required','string','max:255'],
            'depature_minuite'=>['required','string','max:255'],
            'depature_hour'=>['required','string','max:255'],
            'depature_meridiem'=>['required','string','max:255'],
            'arrival_hour'=> ['required','string','max:255'],
            'arrival_minuite'=>['required','string','max:255'],
            'arrival_meridiem'=>['required','string','max:255'],
            'price'=>['required','string','max:255'],
            'banner'=>['required','mimes:png,jpg,jpeg,svg','max:2080'],
            'info'=>['required','string'],
            'car_image'=>['required','mimes:png,jpg,jpeg,svg','max:2080'],
            'car_plate_number'=>['required','mimes:png,jpg,jpeg,svg','max:2080'],
        ];
    }
}

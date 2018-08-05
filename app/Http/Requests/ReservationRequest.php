<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name_customer' => 'required',
            'email' => 'required|email|unique:reservations,email',
            'date' => 'required',
            'phone_number' => 'required',
            'size' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_customer.required' => 'Your name field is required',
            'size.required' => 'Total Person. How many people?',
        ];
    }
}

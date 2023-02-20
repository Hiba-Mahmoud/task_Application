<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegistrationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|regex:/(^([a-zA-Z]+)(\d+)?$)/u
            ',
            'mid_name' => 'nullable|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'last_name' => 'required|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'email' => 'required|email|unique:users|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+com$/ix',
            'mobile' => 'required|unique:users|regex:/^01[0125][0-9]{8}$/',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'drive_licence' => 'mimes:png,jpg,jpeg',
            'longitude' => '',
            'latitude' => '',
        ];
    }



    public function failedValidation(Validator $validator)
{
    $errors = $validator->errors();

    $response = response()->json([
        'message' => 'Invalid data send',
        'details' => $errors->messages(),
    ], 422);

    throw new HttpResponseException($response);
}
}

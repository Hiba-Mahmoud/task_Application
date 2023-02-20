<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
            // 'email' => 'required|unique:users,email|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+com$/i',
            // 'email' => ['required','email','regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+com$/i',Rule::unique('users')->ignore($this->email)],\
            'email' => [Rule::unique('users')->ignore($this->email)],

            'mobile' => 'required|unique:users|regex:/^01[0125][0-9]{8}$/',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'drive_licence' => 'nullable|mimes:png,jpg,jpeg',
            'role' => 'required',
            'longitude' => '',
            'latitude' => '',
        ];
    }
}

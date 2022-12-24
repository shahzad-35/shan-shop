<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => [
                'required',
                function ($attribute, $value, $fail) {
                    $domain = substr(strrchr($value, "@"), 1);
                    if (empty(dns_get_record($domain, DNS_MX))) {
                        $fail("Please provide valid email address");
                    }
                }
            ],
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Please enter email address',
            'password.required' => 'Please enter password to get login'
        ];
    }
}

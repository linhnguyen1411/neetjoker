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
     * @return array
     */
    public function rules()
    {
        return [
            'u_name'=>'required',
            'u_pass'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'u_name.required'=>'Bạn phải nhập vào username!',
            'u_pass.required'=>'Bạn phải nhập vào password!',
        ];
    }
}

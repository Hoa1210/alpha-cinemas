<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterAdminRequest extends FormRequest
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
            'fullname' => 'required',
            'email'=> 'required|email',
            'password'=> 'required',
            'password_confinmation'=> 'required',
            'phone'=> 'required', 
            'birthday'=> 'required',
        ];
    }

    public function messages(){
        return [
            'fullname.required' => 'Không được để trống họ tên',
            'email.required'=> 'Không được để trống email',
            'email.email'=> 'Không phải email',
            'password.required'=> 'Không được để trống mật khẩu',
            'password_confinmation.required'=> 'Không được để trống nhập lại mật khẩu',
            'phone.required'=> 'Không được để trống số điện thoại', 
            'birthday.required'=> 'Không được để trống ngày sinh',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSmsRegisterRequests extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'captcha' => 'required|captcha',
            'phone' => 'required|phone:CN,mobile'
        ];
    }

    public function messages()
    {
        return [
            'captcha.required' => '验证码不能为空',
            'captcha.captcha' => '请输入正确的验证码',
        ];
    }
}

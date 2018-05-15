<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Auth;

class MessageRequest extends FormRequest
{

    public function authorize()
    {
    	// Using policy for Authorization
        return true;
    }

    public function rules()
    {
        return [
            'company_name' => 'required|between:2,30',
            'address' => 'between:8,80',
            'deployment' => 'between:2,20',
            'responsible_name' => 'between:3-15',
            'phone' => 'between:8,15',
            'fax' => 'max:10',
            'email' => 'required|email',
            'content' => 'min:20'
        ];
    }

    public function messages()
    {
        return [
            'company_name.between' => '请填写正确公司名称不小于2个字符',
            // 'address.between' => '请填写正确',
            // 'deployment' =>
            // 'responsible_name' =>
            // 'phone' =>
            // 'fax' =>
            // 'email' =>
            // 'content' =>

        ];
    }
}

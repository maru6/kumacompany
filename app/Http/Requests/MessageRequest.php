<?php

namespace App\Http\Requests;

class MessageRequest extends Request
{

    public function rules()
    {
        return [
            'company_name' => 'between:2,30',
            'address' => 'between:8,80',
            'deployment' => 'between:2,20',
            'responsible_name' => 'between:3-15',
            'phone' => 'between:8,15',
            'fax' => 'max:10',
            'email' => 'required|email',
            'content' => 'min:20',
        ];
    }

    public function message()
    {
        return [
            // 'company_name.between' => '请填写正确公司名称不小于2个字符',
            // 'address.between' => '请填写正确'
            // 'deployment' =>
            // 'responsible_name' =>
            // 'phone' =>
            // 'fax' =>
            // 'email' =>
            // 'content' =>

        ];
    }
}

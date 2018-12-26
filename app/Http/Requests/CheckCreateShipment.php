<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckCreateShipment extends FormRequest
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
        $rules =  [
            'customer-name' => 'required|min:6',
            'customer-phone' => 'required|min:10',
            'customer-address' => 'required'
        ];
        foreach($this->request->get('product') as $key => $val)
        {
            $rules['product.'.$key.'.*'] = 'required';          
        }
        return $rules;
    }
    public function messages()
    {
        $messages = [];
        $messages = [
            'customer-name.required' => 'Nhập tên khách hàng',
            'customer-phone.required' => 'Số điện thoại của khách hàng là bắt buộc.',
            'customer-address.required' => 'Địa chỉ nhận hàng của khách là bắt buộc'
        ];
        foreach($this->request->get('product') as $key => $val)
        {
            $messages['product.'.$key.'.*.required'] = 'Các trường của sản phẩm là bắt buộc';
            //$messages['product.'.$key.'.*.numeric'] = 'Các trường của sản phẩm phải là số';
        }
        return $messages;
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckMerchandiseRequest extends FormRequest
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
            'shop-name' => 'required|min:6',
            'shop-phone' => 'required|min:10'
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
            'shop-name.required' => 'Bạn phải cho biết nhập hàng của ai.',
            'shop-phone.required' => 'Số điện thoại của shop nhập hàng là bắt buộc.'
        ];
        foreach($this->request->get('product') as $key => $val)
        {
            $messages['product.'.$key.'.*.required'] = 'Các trường của sản phẩm là bắt buộc';
            //$messages['product.'.$key.'.*.numeric'] = 'Các trường của sản phẩm phải là số';
        }
        return $messages;
    }
}

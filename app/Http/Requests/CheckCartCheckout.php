<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
class CheckCartCheckout extends FormRequest
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
        $rules = [
            'name-customer' => 'required',
            'address' => 'required',
            'phone-number' => 'required'
        ];
        return $rules;
    }
    public function messages(){
        $messages = [
            'name-customer.required' => 'Bạn phải nhập tên',
            'address.required' => 'Bạn phải nhập địa chỉ nhận hàng',
            'phone-number.required' => 'Bạn phải nhập số điện thoại liên lạc'
        ];
        return $messages;
    }
}

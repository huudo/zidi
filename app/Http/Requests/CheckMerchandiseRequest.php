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
            $rules['product.'.$key.'.*'] = 'required|numeric';          
        }
        return $rules;
    }
}

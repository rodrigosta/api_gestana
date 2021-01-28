<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Preencha o campo de nome',
            'price.required' => 'Px reencha o campo de preço',
            'quantity.required' => 'Informe a quantidade de produtos'
        ];
    }
}

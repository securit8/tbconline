<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContributor extends FormRequest
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
            'ka.name'=>'required|string',
            'ka.description' => 'required|string',
            'image' => 'required | mimes:jpg,jpeg,png',
            'type' => 'required',
        ];
    }

    public function messages(){
        return [
            'ka.name.required' => 'აუცილებელია დასახელების ველის შევსება (ka)',
            'ka.name.string' => 'აუცილებელია დასახელების ველი იყოს ტექსტური ფორმატის (ka)',

            'ka.description.required' => 'აუცილებელია აღწერის ველის შევსება (ka)',
            'ka.description.string' => 'აუცილებელია აღწერის ველი იყოს ტექსტური ფორმატის (ka)',

            'image.required' => 'აუცილებელია სურათის ატვირთვა',
            'image.mimes' => 'სურათის ფორმატი უნდა იყოს: jpg, jpeg ან png ფორმატის',

            'type.required' => 'აუცილებელია ტიპის არჩევა'
        ];
    }
}

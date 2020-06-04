<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAbout extends FormRequest
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

   
    
    public function rules()
    {
        return [
            'ka.name'=>'required|string',
            'ka.description' => 'required|string',
            'image' => 'required | mimes:jpg,jpeg,png'
        ];
    }

    public function messages(){
        return [
            'ka.name.required' => 'აუცილებელია დასახელების ველის შევსება (ka)',
            'ka.name.string' => 'აუცილებელია დასახელების ველი იყოს ტექსტური ფორმატის (ka)',

            'ka.description.required' => 'აუცილებელია აღწერის ველის შევსება (ka)',
            'ka.description.string' => 'აუცილებელია აღწერის ველი იყოს ტექსტური ფორმატის (ka)',

            'image.required' => 'აუცილებელია სურათის ატვირთვა',
            'image.mimes' => 'სურათის ფორმატი უნდა იყოს: jpg, jpeg ან png ფორმატის'
        ];
    }
}

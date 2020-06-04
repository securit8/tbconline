<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGallery extends FormRequest
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
            'poster' => 'required | mimes:jpg,jpeg,png'
        ];
    }

    public function messages(){
        return [
            'ka.name.required' => 'აუცილებელია დასახელების ველის შევსება (ka)',
            'ka.name.string' => 'აუცილებელია დასახელების ველი იყოს ტექსტური ფორმატის (ka)',

            'poster.required' => 'აუცილებელია სურათის ატვირთვა',
            'poster.mimes' => 'სურათის ფორმატი უნდა იყოს: jpg, jpeg ან png ფორმატის'
            
        ];
    }
}

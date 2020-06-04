<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNews extends FormRequest
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
            'ka.title'          => 'required|string',
            'ka.description'    => 'required|string',
            'date'              => 'required|date',
            'mainImage'         => 'required|mimes:jpg,jpeg,png'
        ];
    }

    public function messages(){
        return [
            'ka.title.required' => 'აუცილებელია დასახელების ველის შევსება (ka)',
            'ka.title.string' => 'აუცილებელია დასახელების ველი იყოს ტექსტური ფორმატის (ka)',

            'ka.description.required' => 'აუცილებელია აღწერის ველის შევსება (ka)',
            'ka.description.string' => 'აუცილებელია აღწერის ველი იყოს ტექსტური ფორმატის (ka)',
            
            'date.required' => 'აუცილებელია თარიღის არჩევა',
            'date.date' => 'თარიღი სწორად უნდა იყოს შეყვანილი',

            'mainImage.required' => 'აუცილებელია სურათის ატვირთვა',
            'mainImage.mimes' => 'სურათია მხოლოდ შემდეგი გაფარტოების ტიპის უნდა იყოს: jpg,jpeg ან png'

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateScholarship extends FormRequest
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
            'ka.description' => 'required|string',
            'en.description' => 'required|string',
        ];
    }

    public function messages(){
        return [
            'ka.description.required' => 'აუცილებელია აღწერის ველის შევსება (ka)',
            'en.description.required' => 'აუცილებელია აღწერის ველის შევსება (en)',
            'ka.description.string' => 'აუცილებელია აღწერის ველი იყოს ტექსტური ფორმატის (ka)',
            'en.description.string' => 'აუცილებელია აღწერის ველი იყოს ტექსტური ფორმატის (en)',

        ];
    }
}

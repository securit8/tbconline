<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeaderRequest extends FormRequest
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
            'img' => 'required|mimes:jpeg,jpg,png|max:10240'
        ];
    }

    public function messages() {
        return [
            'img.required'   => 'აუცილებელია სურათის ატვირთვა',
            'img.mimes'      => 'სურათის ფორმატი უნდა იყოს: jpg, jpeg, ან png'
        ];

    }
}

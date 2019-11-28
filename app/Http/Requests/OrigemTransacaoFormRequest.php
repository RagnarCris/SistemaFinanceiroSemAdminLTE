<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrigemTransacaoFormRequest extends FormRequest
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
            //
            'Nome'=> 'required|min:2',
            'Descrição'=> 'required|min:4'
        ];
    }
    public function messages()
    {
        return [
            'Nome.required' => 'O campo nome é obrigatorio',
            'Nome.min' => 'O campo deve ter no minmo 2 caracteres',
            'Descrição.required' => 'O campo Descrição é obrigatorio',
            'Descrição.min' => 'O campo deve ter no minmo 4 caracteres',

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class FornecedorFormRequest extends FormRequest
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
            'Telefone'=> 'required|min:8',
            'Endereco'=> 'required|min:4'
            ];

    }
    public function messages()
    {
        return [
            'Nome.required' => 'O campo nome é obrigatorio',
            'Nome.min' => 'O campo deve ter no minmo 2 caracteres',
            'Telefone.required' => 'O campo Descrição é obrigatorio',
            'Telefone.min' => 'O campo deve ter no minmo 4 caracteres',
            'Endereco.required' => 'O campo Tipo é obrigatorio',
            'Endereco.min' => 'O campo deve ter no minmo 2 caracteres',

        ];
    }
}

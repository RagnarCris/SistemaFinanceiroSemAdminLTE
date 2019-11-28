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
            'nome'=> 'required|min:2',
            'cnpj'=> 'required|min:2',
            'telefone'=> 'required|min:2',
            'endereco'=> 'required|min:2'
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório',
            'nome.min' => 'O campo Nome deve ter pelo menos 2 caracteres',
            
            'cnpj.required' => 'O campo CNPJ é obrigatório',
            'cnpj.min' => 'O campo CNPJ deve ter pelo menos 2 caracteres',

            'telefone.required' => 'O campo Telefone é obrigatório',
            'telefone.min' => 'O campo Telefone deve ter pelo menos 2 caracteres',

            'endereco.required' => 'O campo Endereço é obrigatório',
            'endereco.min' => 'O campo Endereço deve ter pelo menos 2 caracteres'
        ];
    }
}

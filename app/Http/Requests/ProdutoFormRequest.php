<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoFormRequest extends FormRequest
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
            'nome' => 'required|min:2', 
            'descricao' => 'required|min:4', 
            'preco' => 'required',
        ];
    }
    //Função para personalisar as mensagens de validação
    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório',
            'nome.min' => 'O campo Nome precisa ter pelo menos 2 caracteres',
            'preco.required' => 'O campo Preço é obrigatório',
            'descricao.required' => 'O campo Descrição é obrigatório',
            'descricao.min' => 'O campo Descrição precisa ter pelo menos 4 caracteres'
        ];
    }
}

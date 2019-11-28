<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicoFormRequest extends FormRequest
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
            'Nome' => 'required|min:2', 
            'Descrição' => 'required|min:4', 
            'Preço' => 'required',
        ];
    }
    //Função para personalisar as mensagens de validação
    public function messages()
    {
        return [
            'Nome.required' => 'O campo Nome é obrigatório',
            'Nome.min' => 'O campo Nome precisa ter pelo menos 2 caracteres',
            'Preço.required' => 'O campo Preço é obrigatório',
            'Descrição.required' => 'O campo Descrição é obrigatório',
            'Descrição.min' => 'O campo Descrição precisa ter pelo menos 4 caracteres'
        ];
    }
}

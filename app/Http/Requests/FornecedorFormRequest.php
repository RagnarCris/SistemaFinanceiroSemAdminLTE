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
            'descricao'=> 'required|min:4',
            'tipo'=> 'required|min:4',
            'valorPrevisto'=>'required|min:1',
            'valorRecebido'=>'required|min:1',
            'data'=> 'required|min:2'
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatorio',
            'nome.min' => 'O campo Nome deve ter pelo menos 2 caracteres',

            'descricao.required' => 'O campo Descrição é obrigatorio',
            'descricao.min' => 'O campo Descrição deve ter pelo menos 4 caracteres',

            'tipo.required' => 'O campo Tipo é obrigatorio',
            'tipo.min' => 'O campo Tipo deve ter pelo menos 4 caracteres',

            'valorPrevisto.required' => 'O campo Valor Previsto é obrigatorio',
            'valorPrevisto.min' => 'O campo Valor Previsto deve ter pelo menos 1 caractere',

            'valorRecebido.required' => 'O campo Valor Recebido é obrigatorio',
            'valorRecebido.min' => 'O campo Valor Recebido deve ter pelo menos 1 caractere',

            'data.required' => 'O campo Data é obrigatorio',
            'data.min' => 'O campo Data deve ter pelo menos 2 caracteres',
            

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransacaoFormRequest extends FormRequest
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
            'tipo'=> 'required|min:2',
            'valorPrevisto'=> 'required|min:1',
            'valorRecebido'=> 'required|min:1',
            'data'=> 'required|min:8',


        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatorio',
            'nome.min' => 'O campo deve ter no minmo 2 caracteres',
            'descricao.required' => 'O campo Descrição é obrigatorio',
            'descricao.min' => 'O campo deve ter no minmo 4 caracteres',
            'tipo.required' => 'O campo Tipo é obrigatorio',
            'tipo.min' => 'O campo deve ter no minmo 2 caracteres',
            'valorPrevisto.required' => 'O campo Valor Previsto é obrigatorio',
            'valorPrevisto.min' => 'O campo deve ter no minmo 1 caracteres',
            'valorRecebido.required' => 'O campo Valor Recebido é obrigatorio',
            'valorRecebido.min' => 'O campo deve ter no minmo 1 caracteres',
            'data.required' => 'O campo data é obrigatorio',
            'data.min' => 'O campo deve ter no  8 caracteres',
        ];
            }
}

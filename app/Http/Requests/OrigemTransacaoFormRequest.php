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
            'nome'=> 'required|min:2',
            'descricao'=> 'required|min:4'
        ];
    }
    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatorio',
            'nome.min' => 'O campo Nome deve ter no minmo 2 caracteres',
            'descricao.required' => 'O campo Descrição é obrigatorio',
            'descricao.min' => 'O campo Descrição deve ter no minmo 4 caracteres',

        ];
    }
}

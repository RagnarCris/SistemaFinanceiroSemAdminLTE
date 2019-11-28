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
            //
            'Nome'=> 'required|min:2',
            'Descrição'=> 'required|min:4',
            'Tipo'=> 'required|min:2',
            'ValorPrevisto'=> 'required|min:1',
            'ValorRecebido'=> 'required|min:1',
            'Data'=> 'required|min:8',


        ];
    }
    public function messages()
    {
        return [
            'Nome.required' => 'O campo nome é obrigatorio',
            'Nome.min' => 'O campo deve ter no minmo 2 caracteres',
            'Descrição.required' => 'O campo Descrição é obrigatorio',
            'Descrição.min' => 'O campo deve ter no minmo 4 caracteres',
            'Tipo.required' => 'O campo Tipo é obrigatorio',
            'Tipo.min' => 'O campo deve ter no minmo 2 caracteres',
            'ValorPrevisto.required' => 'O campo Valor Previsto é obrigatorio',
            'ValorPrevisto.min' => 'O campo deve ter no minmo 1 caracteres',
            'ValorRecebido.required' => 'O campo Valor Recebido é obrigatorio',
            'ValorRecebido.min' => 'O campo deve ter no minmo 1 caracteres',
            'Data.required' => 'O campo data é obrigatorio',
            'data.min' => 'O campo deve ter no  8 caracteres',
        ];
            }
}

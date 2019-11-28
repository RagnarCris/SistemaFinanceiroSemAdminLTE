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
            'nomeOrigem'=> 'required|min:2',
        ];
    }
    public function messages()
    {
        return [
            'nomeOrigem.required' => 'O campo Nome de Origem é obrigatorio',
            'nomeOrigem.min' => 'O campo Nome de Origem deve ter pelo menos 2 caracteres'
        ];
    }
}

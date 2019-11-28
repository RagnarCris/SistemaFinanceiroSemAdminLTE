<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\OrigemTransacao;

use App\Http\Requests\OrigemTransacaoFormRequest;

class OrigemTransacaoController extends Controller
{
    public function list(Request $request)
    {
        $origens = OrigemTransacao::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('origem.list', compact('origens', 'mensagem'));
    }


    public function create()
    {
        return view('origem.create');
    }

    public function store(OrigemTransacaoFormRequest $request)
    {
        $origem = OrigemTransacao::create($request->all());
        $request->session()->flash('mensagem', "Origem da Transação {$origem->nome} cadastrada com sucesso");
        return redirect()->route('listar_origens');
    }

    public function destroy (Request $request)
    {
        OrigemTransacao::destroy($request->id);
        $request->session()->flash('mensagem', "Origem da Transação removida com sucesso");
        return redirect()->route('listar_origens');
    }
}

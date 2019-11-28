<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transacao;

use App\Http\Requests\TransacaoFormRequest;


class transacaoController extends Controller
{
    public function list(Request $request)
    {
        $transacoes = Transacao::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('transacao.list', compact('transacoes', 'mensagem'));
    }


    public function create()
    {
        return view('transacao.create');
    }

    public function store(TransacaoFormRequest $request)
    {
        $transacao = Transacao::create($request->all());
        $request->session()->flash('mensagem', "Transacao {$transacao->nome} cadastrada com sucesso");
        return redirect()->route('listar_transacoes');
    }

    public function destroy (Request $request)
    {
        Transacao::destroy($request->id);
        $request->session()->flash('mensagem', "Transacao removida com sucesso");
        return redirect()->route('listar_transacoes');
    }
}

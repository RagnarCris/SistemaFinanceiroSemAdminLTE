<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrigemTransacaoFormRequest;
use App\OrigemTransacao;
use Illuminate\Http\Request;

class origemTransacaoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/origemTransaçao/cadastroorigemtrans');
    }
    public function listagem(OrigemTransacaoFormRequest $request)
    {
        $origemtransacao = OrigemTransacao::query()->orderBy('Nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('/origemTransaçao/listaorigemtrans', compact('origemtransacao', 'mensagem'));
    }
    public function store(OrigemTransacaoFormRequest $request)
    {
        $nome = $request->nome;
        $origemtransacao = OrigemTransacao::create($request->all());
        $request->session()->flash('mensagem', "Origem da transação {$nome} cadastrada com sucesso");
        return redirect()->route('listarOrigens');
    }
}

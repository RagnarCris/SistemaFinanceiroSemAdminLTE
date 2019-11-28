<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransacaoFormRequest;
use App\Transacao;
use Illuminate\Http\Request;

class transacaoController extends Controller
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
        return view('/trasacao/cadastroTrans');
    }
    public function listagem(TransacaoFormRequest $request)
    {
        $transacao = Transacao::query()->orderBy('Nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('/trasacao/teste', compact('transacao', 'mensagem'));
    }
    public function store(TransacaoFormRequest $request)
    {
        $nome = $request->nome;
        $transacao = Transacao::create($request->all());
        $request->session()->flash('mensagem', "Transação {$nome} cadastrado com sucesso");
        return redirect()->route('listarTransacoes');
    }
}

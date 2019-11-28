<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;
use App\Http\Requests\ServicoFormRequest;

class servicoController extends Controller
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
        return view('/servico/cadastroServico');
    }
    public function listagem(ServicoFormRequest $request)
    {
        $servico = Servico::query()->orderBy('Nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('/servico/ListaServico', compact('servico', 'mensagem'));
    }
    public function store(ServicoFormRequest $request)
    {
        $nome = $request->nome;
        $servico = Servico::create($request->all());
        $request->session()->flash('mensagem', "Serviço {$nome} cadastrado com sucesso");
        return redirect()->route('listarServicos');
    }
}

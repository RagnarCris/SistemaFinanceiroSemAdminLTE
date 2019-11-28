<?php

namespace App\Http\Controllers;

use App\Servico;
use App\Serviço;
use Illuminate\Http\Request;
use App\Http\Requests\ServicoFormRequest;

class servicoController extends Controller
{
    //
    public function list(Request $request)
    {
        $servicos = Servico::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('servico.list', compact('servicos', 'mensagem'));
    }


    public function create()
    {
        return view('servico.create');
    }

    public function store(ServicoFormRequest $request)
    {
        $servico = Servico::create($request->all());
        $request->session()->flash('mensagem', "Serviço {$servico->nome} cadastrado com sucesso");
        return redirect()->route('listar_servicos');
    }

    public function destroy (Request $request)
    {
        Servico::destroy($request->id);
        $request->session()->flash('mensagem', "Serviço removido com sucesso");
        return redirect()->route('listar_servicos');
    }
}

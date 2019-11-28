<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;

use App\Http\Requests\ProdutoFormRequest;

class ProdutoController extends Controller
{
    public function list(Request $request)
    {
        $produtos = Produto::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('produto.list', compact('produtos', 'mensagem'));
    }


    public function create()
    {
        return view('produto.create');
    }

    public function store(ProdutoFormRequest $request)
    {
        $produto = Produto::create($request->all());
        $request->session()->flash('mensagem', "Produto {$produto->nome} cadastrada com sucesso");
        return redirect()->route('listar_produtos');
    }

    public function destroy (Request $request)
    {
        Produto::destroy($request->id);
        $request->session()->flash('mensagem', "Produto removida com sucesso");
        return redirect()->route('listar_produtos');
    }
}
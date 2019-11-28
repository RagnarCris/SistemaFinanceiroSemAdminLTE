<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Fornecedor;

use App\Http\Requests\FornecedorFormRequest;

class FornecedorController extends Controller
{
    public function list(Request $request)
    {
        $fornecedores = Fornecedor::query()->orderBy('nomeOrigem')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('fornecedor.list', compact('fornecedores', 'mensagem'));
    }


    public function create()
    {
        return view('fornecedor.create');
    }

    public function store(FornecedorFormRequest $request)
    {
        $fornecedor = Fornecedor::create($request->all());
        $request->session()->flash('mensagem', "Fornecedor {$fornecedor->nomeOrigem} cadastrada com sucesso");
        return redirect()->route('listar_fornecedores');
    }

    public function destroy (Request $request)
    {
        Fornecedor::destroy($request->id);
        $request->session()->flash('mensagem', "Fornecedor removida com sucesso");
        return redirect()->route('listar_fornecedores');
    }
}
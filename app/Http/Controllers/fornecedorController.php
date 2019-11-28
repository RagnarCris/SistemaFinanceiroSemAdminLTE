<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;
use App\Http\Requests\FornecedorFormRequest;
class fornecedorController extends Controller
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
        return view('/fornecedor/cadastroFornecedor');
    }
    public function listagem(FornecedorFormRequest $request)
    {
        $fornecedor = Fornecedor::query()->orderBy('Nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('/fornecedor/listaFornecedor', compact('fornecedor', 'mensagem'));
    }
    public function store(FornecedorFormRequest $request)
    {
        $nome = $request->nome;
        $fornecedor = Fornecedor::create($request->all());
        $request->session()->flash('mensagem', "Fornecedor {$nome} cadastrado com sucesso");
        return redirect()->route('listarFornecedores');
    }
}

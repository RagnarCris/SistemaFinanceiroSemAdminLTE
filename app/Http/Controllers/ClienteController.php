<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

use App\Http\Requests\ClienteFormRequest;

class ClienteController extends Controller
{

    public function index(Request $request)
    {       
        
        $mensagem = $request->session()->get('mensagem');
        return view('livros.index');
    }

    public function list(Request $request)
    {
        
        $clientes = Cliente::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('cliente.list', compact('clientes', 'mensagem'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $livro = Livro::where('titulo','LIKE','%'.$search.'%')->get();
        return view('livros.result')->withDetails($livro)->withQuery ( $search );
    }

    public function store(ClienteFormRequest $request)
    {
        $nome = $request->nome;
        $cliente = Cliente::create($request->all());
        $request->session()->flash('mensagem', "Cliente {$nome} cadastrado com sucesso");
        return redirect()->route('listar_clientes');
    }

    public function edit($id)
    {
        $livro = Livro::find($id);
        return view('livros.edit', compact('livro'));
    }

    public function update(LivrosFormRequest $request, $id)
    {
        $livro = Livro::find($id);
        $livro->titulo = $request->input('titulo');
        $livro->autor = $request->input('autor');
        $livro->ano = $request->input('ano');
        $livro->preco = $request->input('preco');
        $livro->quantidade = $request->input('quantidade');
        $livro->tipo = $request->input('tipo');
        $livro->idEd = $request->input('idEd');
        $livro->update();
        $request->session()->flash('mensagem', "Livro atualizado com sucesso");
        return redirect()->route('listar_clientes');
    }

    public function detail(Request $request)
    {
        $livro = Livro::where('id','LIKE','%'.$request->id.'%')->get();
        return view('livros.detail')->withDetails($livro);
    }

    public function destroy (Request $request)
    {
        Livro::destroy($request->id);
        $request->session()->flash('mensagem', "Livro removido com sucesso");
        return redirect()->route('listar_clientes');
    }
}
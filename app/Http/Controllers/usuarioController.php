<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class usuarioController extends Controller
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
        return view('/usuario/cadastroUsuario');
    }
    public function listagem(Request $request)
    {
        $usuarios = User::query()->orderBy('Nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('/usuario/listaUsuario', compact('usuarios', 'mensagem'));
    }
    public function store(Request $request)
    {
        $nome = $request->nome;
        $usuarios = User::create($request->all());
        $request->session()->flash('mensagem', "Usuário {$nome} cadastrado com sucesso");
        return redirect()->route('listarUsuarios');
    }
}

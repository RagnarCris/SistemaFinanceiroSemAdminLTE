<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Editora;

use App\Http\Requests\EditorasFormRequest;

class EditorasController extends Controller
{
    public function list(Request $request)
    {
        $editoras = Editora::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('editoras.index', compact('editoras', 'mensagem'))->withDetails($editoras);
    }


    public function create()
    {
        return view('editoras.create');
    }

    public function store(EditorasFormRequest $request)
    {
        $editora = Editora::create($request->all());
        $request->session()->flash('mensagem', "Editora {$editora->nome} cadastrada com sucesso");
        return redirect()->route('listar_editoras');
    }

    public function destroy (Request $request)
    {
        Editora::destroy($request->id);
        $request->session()->flash('mensagem', "Editora removida com sucesso");
        return redirect()->route('listar_editoras');
    }

}

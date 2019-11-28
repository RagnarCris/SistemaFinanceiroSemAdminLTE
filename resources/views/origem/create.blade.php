@extends('layout')
@section('cabecalho')
<div class="d-flex justify-content-center p-5">
Cadastrar Produto
</div>
@endsection

@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao">
    </div>
    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection
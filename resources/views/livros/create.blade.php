@extends('layout')
@section('cabecalho')
<div class="d-flex justify-content-center p-5">
Cadastrar Livro
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
        <label for="titulo">Título</label>
        <input type="text" class="form-control" name="titulo" id="titulo">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" name="autor" id="autor">
        <label for="ano">Ano</label>
        <input type="text" class="form-control" name="ano" id="ano">
        <label for="preco">Preço</label>
        <input type="text" class="form-control" name="preco" id="preco">
        <label for="quantidade">Quantidade</label>
        <input type="text" class="form-control" name="quantidade" id="quantidade">
        <label for="tipo">Tipo</label>
        <input type="text" class="form-control" name="tipo" id="tipo">
        <label for="idEd">ID da Editora</label>
        <input type="text" class="form-control" name="idEd" id="idEd">
    </div>
    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection
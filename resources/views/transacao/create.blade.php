@extends('layout')
@section('cabecalho')
<div class="d-flex justify-content-center p-5">
Cadastrar Transação
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
        <label for="preco">Tipo</label>
        <input type="text" class="form-control" name="tipo" id="preco">
        <label for="preco">Valor Previsto</label>
        <input type="text" class="form-control" name="valorPrevisto" id="preco">
        <label for="preco">Valor Recebido</label>
        <input type="text" class="form-control" name="valorRecebido" id="preco">
        <label for="preco">Data</label>
        <input type="text" class="form-control" name="data" id="preco">
    </div>
    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection
@extends('layout')
@section('cabecalho')
<div class="d-flex justify-content-center p-5">
Produtos
</div>
@endsection

@section('conteudo')
@if(!empty($mensagem))
    <div class="alert alert-success">
        {{ $mensagem }}
    </div>
@endif

<div class="table-responsive">
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Preço</th>

        </tr>
        </thead>
        @foreach ($produtos as $produto)
        <tbody>
        <tr>
            <td scope="row">{{ $produto->id }}</td>
            <td>  {{ $produto->nome }} </td>
            <td>{{ $produto->descricao }} </td>
            <td>{{ $produto->preco }} </td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection